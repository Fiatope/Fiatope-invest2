<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

$name    = htmlspecialchars(strip_tags($_POST["name"]    ?? ''));
$email   = filter_var($_POST["email"]   ?? '', FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars(strip_tags($_POST["subject"] ?? ''));
$message = htmlspecialchars(strip_tags($_POST["message"] ?? ''));

if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    header('Location: echec.php');
    exit;
}

// Credentials depuis les variables d'environnement (configurées dans EasyPanel)
$smtp_host     = getenv('SMTP_HOST')     ?: 'smtp.gmail.com';
$smtp_username = getenv('SMTP_USERNAME') ?: '';
$smtp_password = getenv('SMTP_PASSWORD') ?: '';
$smtp_port     = (int)(getenv('SMTP_PORT') ?: 587);
$mail_from     = getenv('MAIL_FROM')     ?: $smtp_username;
$mail_to       = getenv('MAIL_TO')       ?: $smtp_username;
$mail_to_name  = getenv('MAIL_TO_NAME')  ?: 'Fiatope Invest';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $smtp_host;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtp_username;
    $mail->Password   = $smtp_password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $smtp_port;

    $mail->setFrom($mail_from, "FIATOPE INVEST");
    $mail->addReplyTo($email, $name);
    $mail->addAddress($mail_to, $mail_to_name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "Nom : $name <br>Email : $email <br>Sujet: $subject <br>Message : $message";

    $mail->send();
    header('Location: succes.php');
    exit;
} catch (Exception $e) {
    header('Location: echec.php');
}
