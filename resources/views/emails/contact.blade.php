<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .info {
            margin: 20px 0;
        }
        .info-label {
            font-weight: bold;
            color: #2c3e50;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 4px solid #3498db;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nuevo mensaje desde el Portfolio</h2>
        
        <div class="info">
            <p><span class="info-label">Nombre:</span> {{ $name }}</p>
            <p><span class="info-label">Email:</span> {{ $email }}</p>
        </div>
        
        <div class="message-box">
            <p class="info-label">Mensaje:</p>
            <p>{{ $messageContent }}</p>
        </div>
        
        <div class="footer">
            <p>Este mensaje fue enviado desde el formulario de contacto de tu portfolio.</p>
            <p>Puedes responder directamente a este correo para contactar con {{ $name }}.</p>
        </div>
    </div>
</body>
</html>
