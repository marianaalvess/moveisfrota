<?php
// Bloquear acesso direto não autorizado
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade e Cookies | Frota Móveis Planejados</title>
    <meta name="description" content="Política de Privacidade e Política de Cookies da Frota Móveis Planejados — Móveis Planejados em Cascavel-PR.">
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://www.moveisfrota.com.br/privacidade.php">
    <link rel="stylesheet" href="/styles.css?v=2.0">
    <style>
        html, body {
            overflow-x: hidden;
            max-width: 100%;
        }
        .privacy-page {
            background: var(--clr-light);
            min-height: 100vh;
            padding: 6rem 1.5rem 4rem;
            overflow-x: hidden;
        }
        .privacy-container {
            max-width: 860px;
            width: 100%;
            margin: 0 auto;
        }
        .privacy-header {
            margin-bottom: 3rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--clr-border);
        }
        .privacy-header .subtitle {
            color: var(--clr-primary);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 0.75rem;
        }
        .privacy-header h1 {
            font-family: var(--font-heading);
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            color: var(--clr-dark);
            line-height: 1.2;
        }
        .privacy-header .update-date {
            color: var(--clr-gray);
            font-size: 0.88rem;
            margin-top: 0.75rem;
        }
        .privacy-section {
            margin-bottom: 2.5rem;
        }
        .privacy-section h2 {
            font-family: var(--font-heading);
            font-size: 1.3rem;
            color: var(--clr-dark);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--clr-border);
        }
        .privacy-section p,
        .privacy-section li {
            color: var(--clr-gray);
            line-height: 1.8;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }
        .privacy-section ul,
        .privacy-section ol {
            padding-left: 1.5rem;
        }
        .privacy-section li {
            margin-bottom: 0.4rem;
        }
        .privacy-section a {
            color: var(--clr-primary);
            text-decoration: underline;
        }
        .cookie-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
            font-size: 0.88rem;
        }
        .cookie-table th {
            background: var(--clr-dark);
            color: var(--clr-primary);
            padding: 0.75rem 1rem;
            text-align: left;
            font-weight: 600;
        }
        .cookie-table td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--clr-border);
            color: var(--clr-gray);
            vertical-align: top;
        }
        .cookie-table tr:last-child td {
            border-bottom: none;
        }
        .privacy-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--clr-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            transition: opacity 0.2s;
        }
        .privacy-back:hover { opacity: 0.75; }
        .consent-reset {
            background: var(--clr-dark);
            color: #ccc;
            border: 1px solid var(--clr-border);
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.85rem;
            font-family: var(--font-main);
            transition: var(--transition-fast);
            margin-top: 0.5rem;
        }
        .consent-reset:hover {
            border-color: var(--clr-primary);
            color: var(--clr-primary);
        }
        .highlight-box {
            background: rgba(197, 160, 67, 0.08);
            border-left: 3px solid var(--clr-primary);
            padding: 1rem 1.25rem;
            border-radius: 0 4px 4px 0;
            margin: 1rem 0;
        }
        .highlight-box p { margin: 0; }
    </style>
</head>
<body>

    <!-- Navbar simples -->
    <header style="position:fixed;top:0;left:0;right:0;z-index:100;background:var(--clr-dark);border-bottom:1px solid var(--clr-border);padding:0.85rem 1.5rem;display:flex;align-items:center;justify-content:space-between;">
        <a href="/" aria-label="Frota Móveis Planejados - Voltar ao início" style="display:flex;align-items:center;text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8333.3 2359.41" style="height:28px;width:auto;fill:#c5a043;" aria-hidden="true">
                <path d="M515.58 30.38c73.27,0 138.89,10.65 196.84,31.97 57.95,21.32 106.92,51.96 146.88,91.93 39.97,39.96 70.28,87.59 90.93,142.89 20.64,55.29 30.97,116.9 30.97,184.84 0,54.63 -8.98,112.58 -26.97,173.86 -17.99,61.29 -46.29,117.91 -84.94,169.87 -38.63,51.95 -88.26,95.26 -148.88,129.89 -60.62,34.64 -133.56,52.63 -218.83,53.96 -58.62,0 -112.58,-5.33 -161.87,-15.98l0 465.63 -259.79 0c-2.67,-231.81 -6.66,-444.31 -11.99,-637.49 -2.67,-82.6 -6,-164.87 -9.99,-246.8 -3.99,-81.94 -8.67,-157.54 -13.99,-226.82 -5.33,-69.27 -11.66,-129.23 -18.99,-179.85 -7.33,-50.62 -15.65,-86.59 -24.98,-107.92 25.31,-2.67 58.62,-5.66 99.92,-8.99 41.3,-3.32 85.92,-6.66 133.89,-9.98 47.96,-3.33 96.92,-6 146.88,-8 49.96,-2 94.93,-2.99 134.89,-2.99zm221.82 485.61c25.32,-113.25 28.65,-203.84 9.99,-271.79 -18.65,-67.94 -49.63,-115.91 -92.92,-143.88 -43.3,-27.98 -93.59,-37.64 -150.88,-28.98 -57.28,8.67 -111.91,32.97 -163.87,72.95l0 817.34c34.64,13.32 70.61,16.65 107.92,9.99 37.31,-6.66 73.27,-26.98 107.92,-60.96 34.64,-33.97 67.61,-82.93 98.92,-146.88 31.31,-63.95 58.95,-146.55 82.93,-247.8z"/>
            </svg>
        </a>
        <a href="/" style="color:var(--clr-primary);font-size:0.9rem;font-weight:600;text-decoration:none;">&larr; Voltar ao site</a>
    </header>

    <main class="privacy-page">
        <div class="privacy-container">

            <a href="/" class="privacy-back">&larr; Voltar ao site</a>

            <div class="privacy-header">
                <span class="subtitle">Transparência &amp; LGPD</span>
                <h1>Política de Privacidade<br>e Política de Cookies</h1>
                <p class="update-date">Última atualização: 24 de abril de 2026</p>
            </div>

            <!-- 1. Responsável pelo tratamento -->
            <div class="privacy-section">
                <h2>1. Responsável pelo Tratamento de Dados</h2>
                <p>O responsável pelo tratamento dos seus dados pessoais é:</p>
                <div class="highlight-box">
                    <p><strong>Frota Móveis Planejados</strong><br>
                    Rua Cláudia Galante Padovani, 1277 B - Santa Felicidade<br>
                    85803-337 Cascavel - PR, Brasil<br>
                    E-mail: <a href="mailto:comercial@moveisfrota.com.br">comercial@moveisfrota.com.br</a><br>
                    Telefone: <a href="tel:+554530960906">+55 45 3096-0906</a></p>
                </div>
            </div>

            <!-- 2. Dados recolhidos -->
            <div class="privacy-section">
                <h2>2. Dados Pessoais Recolhidos</h2>
                <p>Recolhemos dados pessoais nas seguintes situações:</p>
                <ul>
                    <li><strong>Formulário de contacto:</strong> nome, telefone, email, localização de instalação, tipo de móvel pretendido e mensagem.</li>
                    <li><strong>Chatbot de orçamento:</strong> nome, tipo de móvel, estado do projeto, localização e observações fornecidas voluntariamente.</li>
                    <li><strong>Google Analytics (com consentimento):</strong> dados anónimos de navegação — páginas visitadas, tempo de permanência, tipo de dispositivo, país. Não identificamos individualmente nenhum utilizador.</li>
                </ul>
            </div>

            <!-- 3. Finalidade -->
            <div class="privacy-section">
                <h2>3. Finalidade do Tratamento</h2>
                <ul>
                    <li><strong>Responder a pedidos de orçamento</strong> e entrar em contacto para agendar consultorias.</li>
                    <li><strong>Melhorar o site</strong> com base em dados de navegação anónimos (apenas se consentir).</li>
                    <li><strong>Cumprimento de obrigações legais</strong> (faturação, arquivo fiscal).</li>
                </ul>
                <p>Não utilizamos os seus dados para marketing direto sem consentimento explícito, nem os partilhamos com terceiros para fins comerciais.</p>
            </div>

            <!-- 4. Base legal -->
            <div class="privacy-section">
                <h2>4. Base Legal do Tratamento</h2>
                <ul>
                    <li><strong>Execução de contrato / pré-contratual</strong> (Art. 6.º, n.º 1, al. b) LGPD) — para pedidos de orçamento e consultoria.</li>
                    <li><strong>Consentimento</strong> (Art. 6.º, n.º 1, al. a) LGPD) — para cookies de análise (Google Analytics).</li>
                    <li><strong>Obrigação legal</strong> (Art. 6.º, n.º 1, al. c) LGPD) — para dados fiscais e arquivo legal.</li>
                </ul>
            </div>

            <!-- 5. Cookies -->
            <div class="privacy-section" id="cookies">
                <h2>5. Política de Cookies</h2>
                <p>Os cookies são pequenos ficheiros de texto guardados no seu dispositivo quando visita o nosso site. Utilizamos os seguintes tipos:</p>

                <table class="cookie-table">
                    <thead>
                        <tr>
                            <th>Cookie</th>
                            <th>Tipo</th>
                            <th>Finalidade</th>
                            <th>Duração</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>frota_cookie_consent</code></td>
                            <td>Essencial</td>
                            <td>Guarda a sua preferência de consentimento de cookies.</td>
                            <td>1 ano (localStorage)</td>
                        </tr>
                        <tr>
                            <td><code>_ga</code></td>
                            <td>Análise (opcional)</td>
                            <td>Google Analytics — identifica sessões únicas de forma anónima.</td>
                            <td>2 anos</td>
                        </tr>
                        <tr>
                            <td><code>_ga_*</code></td>
                            <td>Análise (opcional)</td>
                            <td>Google Analytics — mantém o estado da sessão de análise.</td>
                            <td>2 anos</td>
                        </tr>
                    </tbody>
                </table>

                <p>Os cookies de análise (<code>_ga</code>, <code>_ga_*</code>) <strong>só são ativados se aceitar cookies</strong> no banner apresentado na primeira visita.</p>

                <p><strong>Gerir o seu consentimento:</strong> pode alterar a sua preferência a qualquer momento clicando no botão abaixo.</p>
                <button class="consent-reset" id="reset-consent">Alterar preferência de cookies</button>
            </div>

            <!-- 6. Partilha de dados -->
            <div class="privacy-section">
                <h2>6. Partilha de Dados com Terceiros</h2>
                <ul>
                    <li><strong>Google LLC</strong> — apenas se aceitar cookies de análise (Google Analytics 4). Os dados são anonimizados. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Política de Privacidade do Google</a>.</li>
                    <li><strong>PHPMailer / servidor de email</strong> — os dados do formulário são enviados por email cifrado (SSL) para o nosso endereço interno.</li>
                </ul>
                <p>Não vendemos nem cedemos os seus dados a terceiros para fins publicitários.</p>
            </div>

            <!-- 7. Conservação -->
            <div class="privacy-section">
                <h2>7. Prazo de Conservação dos Dados</h2>
                <ul>
                    <li>Dados de formulário de contacto: conservados por <strong>2 anos</strong> após o último contacto.</li>
                    <li>Dados de faturação e arquivo legal: conservados por <strong>10 anos</strong> (obrigação fiscal portuguesa).</li>
                    <li>Dados de análise (Google Analytics): <strong>14 meses</strong> (configuração padrão do GA4).</li>
                </ul>
            </div>

            <!-- 8. Direitos do titular -->
            <div class="privacy-section">
                <h2>8. Os Seus Direitos (LGPD)</h2>
                <p>Ao abrigo do Regulamento Geral sobre a Proteção de Dados (LGPD), tem os seguintes direitos:</p>
                <ul>
                    <li><strong>Acesso:</strong> solicitar uma cópia dos seus dados pessoais.</li>
                    <li><strong>Retificação:</strong> corrigir dados incorretos ou incompletos.</li>
                    <li><strong>Apagamento ("direito a ser esquecido"):</strong> solicitar a eliminação dos seus dados.</li>
                    <li><strong>Limitação:</strong> restringir o tratamento dos seus dados em determinadas circunstâncias.</li>
                    <li><strong>Portabilidade:</strong> receber os seus dados num formato estruturado e legível por máquina.</li>
                    <li><strong>Oposição:</strong> opor-se ao tratamento baseado em interesses legítimos.</li>
                    <li><strong>Retirar o consentimento:</strong> a qualquer momento, sem afetar a licitude do tratamento anterior.</li>
                </ul>
                <p>Para exercer qualquer direito, entre em contato por e-mail: <a href="mailto:comercial@moveisfrota.com.br">comercial@moveisfrota.com.br</a></p>
                <p>Tem também o direito de apresentar reclamação à <strong>Comissão Nacional de Proteção de Dados (CNPD)</strong>: <a href="https://www.cnpd.pt" target="_blank" rel="noopener noreferrer">www.cnpd.pt</a></p>
            </div>

            <!-- 9. Segurança -->
            <div class="privacy-section">
                <h2>9. Segurança dos Dados</h2>
                <p>Adotamos medidas técnicas e organizativas adequadas para proteger os seus dados pessoais contra acesso não autorizado, alteração, divulgação ou destruição. O site utiliza ligação HTTPS cifrada, proteção CSRF nos formulários, e limitação de pedidos para prevenir abusos.</p>
            </div>

            <!-- 10. Alterações -->
            <div class="privacy-section">
                <h2>10. Alterações a esta Política</h2>
                <p>Podemos atualizar esta política periodicamente. Em caso de alterações significativas, publicaremos a nova versão nesta página com a data de atualização. Recomendamos que consulte esta página regularmente.</p>
            </div>

            <div style="text-align:center; padding: 2rem 0 0;">
                <a href="/" class="privacy-back">&larr; Voltar ao site</a>
            </div>

        </div>
    </main>

    <script>
        // Reset de consentimento
        document.getElementById('reset-consent').addEventListener('click', function() {
            localStorage.removeItem('frota_cookie_consent');
            alert('Preferência de cookies removida. Ao regressar ao site, o aviso será novamente apresentado.');
        });
    </script>

</body>
</html>
