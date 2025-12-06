<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new PHPMailer(true);

try {
    // Paramètres SMTP Gmail
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth   = true;
    $mail->Username   = "niangadji02@gmail.com"; 
    $mail->Password   = "oome cniy rtju knii"; // mot de passe d'application
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom("niangadji02@gmail.com", "FIATOPE INVEST");

    $mail->addReplyTo($email, $name);

    $mail->addAddress("niangadji02@gmail.com", "Adji");

    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "Nom : $name <br>Email : $email <br>Sujet: $subject <br>Message : $message";

    $mail->send();
    header('Location: succes.php');
    exit;
} catch (Exception $e) {
    header('Location: echec.php');
}
