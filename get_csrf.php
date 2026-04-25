<?php
// Start session to access or create CSRF token
session_start();

// Security headers
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Handle CORS identical to send_email.php
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

// Generate CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Return the token
echo json_encode(['success' => true, 'csrf_token' => $_SESSION['csrf_token']]);
exit;
