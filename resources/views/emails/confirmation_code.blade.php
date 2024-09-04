<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codice di Conferma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
        .content h1 {
            color: #333;
            font-size: 24px;
        }
        .code {
            font-size: 20px;
            font-weight: bold;
            color: #1d72b8;
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #e5e5e5;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://yourcompanylogo.com/logo.png" alt="Logo Azienda">
        </div>
        <div class="content">
            <h1>Il Tuo Codice di Conferma</h1>
            <p>Grazie per aver scelto <strong>{{ config('app.name') }}</strong>. Per completare la tua registrazione, utilizza il codice di conferma riportato di seguito:</p>
            <div class="code">
                {{ $code }}
            </div>
            <p>Se non hai richiesto questo codice, ti preghiamo di ignorare questa email o di contattare il nostro supporto clienti.</p>
            <p>Grazie,<br>Il Team di {{ config('app.name') }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tutti i diritti riservati.</p>
        </div>
    </div>
</body>
</html>
