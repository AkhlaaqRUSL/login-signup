<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Enable verbose debug output
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";  // Replace with your SMTP server
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // or PHPMailer::ENCRYPTION_SMTPS for SSL
$mail->Port = 587;  // 465 for SSL, 587 for TLS
$mail->Username = "your-email@gmail.com";  // Replace with your email address
$mail->Password = "your-email-password";  // Replace with your email password (consider using app-specific password)

$mail->isHTML(true);

return $mail;
