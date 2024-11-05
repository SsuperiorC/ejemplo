<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$correo = $_POST['envio'] ?? 'No se ingresó ningún correo';
echo "Correo recibido: " . htmlspecialchars($correo, ENT_QUOTES, 'UTF-8');

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'cesarapsricio@gmail.com';
$mail->Password = 'hows frkb dnmy vkkq';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('cesarapsricio@gmail.com', 'kokomi-store');
$mail->addAddress($correo);

$mail->isHTML(true);
$mail->Subject = 'Confirmación de Registro';
$mail->Body = '
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .content {
            max-width: 600px;
            margin: 20px auto;
            background-color: #1A191B;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .header {
            background-color: #A34EE5;
            color: white;
            padding: 20px;
            text-align: center;
            font-family: "Comic Sans MS", sans-serif;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            color: #FFD700;
        }
        .body {
            padding: 20px;
            text-align: center;
            color: #f0f0f0;
        }
        .body p {
            margin: 0 0 20px;
            font-size: 16px;
            line-height: 1.6;
        }
        .body img {
            width: 100%;
            max-width: 250px;
            margin: 20px auto;
            border-radius: 8px;
            display: block;
        }
        .button {
            background-color: #FFD700;
            color: #1A191B;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            border-radius: 25px;
            display: inline-block;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #A34EE5;
            color: #ffffff;
        }
        .footer {
            background-color: #333;
            color: #ddd;
            padding: 15px;
            text-align: center;
            font-size: 14px;
        }
        .footer a {
            color: #FFD700;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="header">
            <h1>Kokomi Store</h1>
            <p>¡Tu tienda de anime favorita!</p>
        </div>
        <div class="body">
            <p>¡Gracias por registrarte para recibir nuestras promociones de anime!</p>
            <img src="cid:imagen1" alt="Imagen Anime">
            <p><a href="http://localhost/php/banquete/php/reservacion.php" class="button">Click aquí para confirmar</a></p>
        </div>
        <div class="footer">
            <p>¿Tienes preguntas? <a href="https://instagram.com/kokomi-store">Contáctanos en Instagram</a></p>
        </div>
    </div>
</body>
</html>
';

$mail->AddEmbeddedImage('logo.png', 'imagen1');
$mail->send();

$msg = "Usuario registrado correctamente y reservaciones actualizadas. Se ha enviado un correo de confirmación.";
header("location: page.html");
?>
