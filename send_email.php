<?php
/**
 * Frota Móveis Planejados - Contact Form Email Handler
 * Sends form data to comercial@moveisfrota.com.br via SMTP
 * 
 * Security: CSRF token, rate limiting, honeypot, time-based bot check,
 *           input validation, CORS restriction, XSS/injection prevention,
 *           secure headers, error handling
 */

// Start session for CSRF validation
session_start();

// ========================================
// SECURITY HEADERS
// ========================================
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: camera=(), microphone=(), geolocation=()');

// ========================================
// CORS - Restricted to your domain (production)
// ========================================
$allowed_origins = [
    'https://moveisfrota.com.br',
    'https://www.moveisfrota.com.br',
];

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: {$origin}");
}
else {
    header('Access-Control-Allow-Origin: https://moveisfrota.com.br');
}
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Max-Age: 86400');

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// ========================================
// RATE LIMITING (file-based, per IP)
// ========================================
$rate_limit_dir = sys_get_temp_dir() . '/frota_rate_limit';
if (!is_dir($rate_limit_dir)) {
    mkdir($rate_limit_dir, 0700, true);
}

$client_ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$rate_file = $rate_limit_dir . '/' . md5($client_ip) . '.json';
$max_requests = 5; // Max emails per window
$window_seconds = 3600; // 1 hour window

if (file_exists($rate_file)) {
    $rate_data = json_decode(file_get_contents($rate_file), true);
    $now = time();

    // Clean old entries outside the window
    $rate_data['requests'] = array_filter(
        $rate_data['requests'] ?? [],
    fn($ts) => ($now - $ts) < $window_seconds
    );

    if (count($rate_data['requests']) >= $max_requests) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Demasiados pedidos. Tente novamente mais tarde.'
        ]);
        exit;
    }
}
else {
    $rate_data = ['requests' => []];
}

// ========================================
// REQUEST SIZE LIMIT (prevent oversized payloads)
// ========================================
$max_body_size = 10240; // 10 KB
$raw_input = file_get_contents('php://input');

if (strlen($raw_input) > $max_body_size) {
    http_response_code(413);
    echo json_encode(['success' => false, 'message' => 'Pedido demasiado grande.']);
    exit;
}

// ========================================
// SMTP CONFIGURATION
// ========================================
$env = parse_ini_file(__DIR__ . '/.env');
$smtp_host     = $env['SMTP_HOST'];
$smtp_port     = (int)$env['SMTP_PORT'];
$smtp_user     = $env['SMTP_USER'];
$smtp_password = $env['SMTP_PASSWORD'];
$smtp_secure   = $env['SMTP_SECURE'];

$from_email = 'noreply@moveisfrota.com.br';
$from_name = 'Frota Móveis - Website';
$to_email = 'comercial@moveisfrota.com.br';
$to_name = 'Frota Móveis Comercial';
// ========================================

// ========================================
// PARSE & VALIDATE INPUT
// ========================================
$data = json_decode($raw_input, true);

if (!$data) {
    $data = $_POST;
}

// ========================================
// CSRF TOKEN VALIDATION
// ========================================
$csrf_token = $data['_csrf'] ?? '';
if (empty($csrf_token) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Token de segurança inválido. Recarregue a página e tente novamente.']);
    exit;
}

// ========================================
// HONEYPOT ANTI-BOT
// ========================================
$honeypot = trim($data['_hp_field'] ?? '');
if (!empty($honeypot)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Bot detetado.']);
    exit;
}

// ========================================
// TIME-BASED ANTI-BOT (min 3 seconds to fill form)
// ========================================
$form_timestamp = intval($data['_ts'] ?? 0);
if ($form_timestamp > 0 && (time() - $form_timestamp) < 3) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Submissão demasiado rápida. Tente novamente.']);
    exit;
}

// Extract and trim fields
$name = trim($data['name'] ?? '');
$phone = trim($data['phone'] ?? '');
$email = trim($data['email'] ?? '');
$furniture = trim($data['furniture'] ?? '');
$project = trim($data['project'] ?? '');
$location = trim($data['location'] ?? '');
$message = trim($data['message'] ?? '');

// Validate required fields
if (empty($name) || empty($phone) || empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Campos obrigatórios em falta.']);
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email inválido.']);
    exit;
}

// Validate field lengths (prevent abuse)
$max_lengths = [
    'name' => 100,
    'phone' => 30,
    'email' => 254,
    'furniture' => 100,
    'project' => 200,
    'location' => 200,
    'message' => 2000,
];

$fields_to_check = compact('name', 'phone', 'email', 'furniture', 'project', 'location', 'message');
foreach ($fields_to_check as $field_name => $field_value) {
    if (mb_strlen($field_value) > $max_lengths[$field_name]) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "O campo {$field_name} excede o tamanho máximo."]);
        exit;
    }
}

// Validate phone format (digits, spaces, +, -, parentheses only)
if (!preg_match('/^[\d\s\+\-\(\)\.]{6,30}$/', $phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Formato de telefone inválido.']);
    exit;
}

// Block header injection attempts (newlines in text fields)
$text_fields = [$name, $phone, $email, $furniture, $project, $location];
foreach ($text_fields as $field) {
    if (preg_match('/[\r\n]/', $field)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Caracteres inválidos detetados.']);
        exit;
    }
}

// ========================================
// SANITIZE for HTML output
// ========================================
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$furniture = htmlspecialchars($furniture, ENT_QUOTES, 'UTF-8');
$project = htmlspecialchars($project, ENT_QUOTES, 'UTF-8');
$location = htmlspecialchars($location, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// ========================================
// RECORD THIS REQUEST (rate limiting)
// ========================================
$rate_data['requests'][] = time();
file_put_contents($rate_file, json_encode($rate_data), LOCK_EX);

// ========================================
// BUILD EMAIL
// ========================================
$subject = "Novo Contato Website - {$name} ({$furniture})";

$body = "
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { background: #1a1a1a; color: #c5a043; padding: 25px 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 22px; letter-spacing: 1px; }
        .content { padding: 30px; }
        .field { margin-bottom: 18px; border-bottom: 1px solid #f0f0f0; padding-bottom: 12px; }
        .field:last-child { border-bottom: none; }
        .label { font-size: 12px; text-transform: uppercase; color: #999; letter-spacing: 1px; margin-bottom: 4px; }
        .value { font-size: 15px; color: #333; }
        .message-box { background: #f9f9f9; padding: 15px; border-radius: 6px; border-left: 3px solid #c5a043; }
        .footer { background: #f5f5f5; padding: 15px 30px; text-align: center; font-size: 12px; color: #999; }
        .meta { background: #fafafa; padding: 10px 30px; font-size: 11px; color: #bbb; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>FROTA MÓVEIS PLANEJADOS</h1>
            <p style='margin: 5px 0 0; font-size: 13px; color: #d0d0d0;'>Novo contato recebido do website</p>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Nome</div>
                <div class='value'><strong>{$name}</strong></div>
            </div>
            <div class='field'>
                <div class='label'>Celular</div>
                <div class='value'><a href='tel:{$phone}'>{$phone}</a></div>
            </div>
            <div class='field'>
                <div class='label'>Email</div>
                <div class='value'><a href='mailto:{$email}'>{$email}</a></div>
            </div>
            <div class='field'>
                <div class='label'>Tipo de Móvel</div>
                <div class='value'>{$furniture}</div>
            </div>
            <div class='field'>
                <div class='label'>Tem Projeto?</div>
                <div class='value'>{$project}</div>
            </div>
            <div class='field'>
                <div class='label'>Local de Instalação</div>
                <div class='value'>{$location}</div>
            </div>
            <div class='field'>
                <div class='label'>Mensagem</div>
                <div class='message-box'>" . nl2br($message) . "</div>
            </div>
        </div>
        <div class='meta'>
            IP: {$client_ip} &bull; Data: " . date('d/m/Y H:i:s') . "
        </div>
        <div class='footer'>
            Este e-mail foi enviado automaticamente pelo formulário de contato do website moveisfrota.com.br
        </div>
    </div>
</body>
</html>";

// ========================================
// SEND EMAIL VIA SMTP (PHPMailer)
// ========================================
$phpmailer_path = __DIR__ . '/vendor/autoload.php';

if (file_exists($phpmailer_path)) {
    require $phpmailer_path;

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_password;
        $mail->SMTPSecure = $smtp_secure === 'ssl'
            ?\PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
            : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $smtp_port;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to_email, $to_name);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = strip_tags(str_replace('<br>', "\n", $body));

        $mail->send();

        echo json_encode(['success' => true, 'message' => 'Email enviado com sucesso!']);
    }
    catch (Exception $e) {
        // Log error internally, don't expose details to client
        error_log('PHPMailer Error [' . date('Y-m-d H:i:s') . ']: ' . $mail->ErrorInfo);
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Erro ao enviar email. Tente novamente.']);
    }
}
else {
    // Fallback: PHP mail()
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: {$from_name} <{$from_email}>\r\n";
    $headers .= "Reply-To: {$name} <{$email}>\r\n";

    if (mail($to_email, $subject, $body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Email enviado com sucesso!']);
    }
    else {
        error_log('mail() failed for contact form submission from ' . $email);
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Erro ao enviar email. Tente novamente.']);
    }
}
