<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KN Cosméticos — Storefront (Laravel 13)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #F7F3EE;
            --surface: #FFFFFF;
            --ink: #1C1412;
            --muted: #6B5F5A;
            --line: #E6DED6;
            --primary: #7A1F3D;
            --primary-hover: #5E1730;
            --accent: #B0894D;
            --success: #2F6B4F;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Manrope', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }
        .card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 12px;
            max-width: 680px;
            width: 100%;
            padding: 48px;
            box-shadow: 0 4px 24px rgba(28, 20, 18, 0.05);
            text-align: center;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #F1ECE6;
            color: var(--primary);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin-bottom: 24px;
            border: 1px solid var(--line);
        }
        .badge-dot {
            width: 8px;
            height: 8px;
            background-color: var(--success);
            border-radius: 50%;
        }
        h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.15;
            color: var(--primary);
            margin-bottom: 12px;
        }
        h2 {
            font-size: 16px;
            font-weight: 500;
            color: var(--muted);
            margin-bottom: 32px;
            line-height: 1.6;
        }
        .grid-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 32px;
            text-align: left;
        }
        .info-box {
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 16px 20px;
        }
        .info-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }
        .info-value {
            font-size: 16px;
            font-weight: 700;
            color: var(--ink);
        }
        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary);
            color: #FFFFFF;
            padding: 12px 28px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.15s ease;
        }
        .btn-primary:hover {
            background-color: var(--primary-hover);
        }
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            color: var(--ink);
            border: 1px solid var(--line);
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.15s ease;
        }
        .btn-secondary:hover {
            background-color: var(--bg);
        }
        .footer-note {
            margin-top: 32px;
            font-size: 13px;
            color: var(--muted);
        }
        @media (max-width: 640px) {
            .card { padding: 28px 20px; }
            h1 { font-size: 32px; }
            .grid-info { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">
            <span class="badge-dot"></span>
            Ambiente Ativo &bull; Porta 9010
        </div>

        <h1>KN Cosméticos Storefront</h1>
        <h2>Novo E-commerce B2C desvinculado do ERP &bull; Design System Oficial</h2>

        <div class="grid-info">
            <div class="info-box">
                <div class="info-label">Framework</div>
                <div class="info-value">Laravel 13 (v{{ app()->version() }})</div>
            </div>
            <div class="info-box">
                <div class="info-label">Ambiente PHP</div>
                <div class="info-value">PHP {{ phpversion() }} (FPM)</div>
            </div>
            <div class="info-box">
                <div class="info-label">Reatividade & CSS</div>
                <div class="info-value">Livewire 3 + Tailwind v4</div>
            </div>
            <div class="info-box">
                <div class="info-label">Docker Isolado</div>
                <div class="info-value">kn-storefront (Nginx:9010)</div>
            </div>
        </div>

        <div class="actions">
            <a href="https://github.com/dartanhan/kn-ecommerce" target="_blank" class="btn-primary">
                Ver Repositório GitHub &rarr;
            </a>
        </div>

        <div class="footer-note">
            Ambiente pronto para receber a casca visual navegável da Etapa 02.
        </div>
    </div>
</body>
</html>
