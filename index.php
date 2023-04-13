<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include the PHPMailer autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Set the SMTP server details
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'zahidhasankhelna@gmail.com'; // SMTP username
$mail->Password = 'hyakpicixqhbblot'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to

// Set the email details
$mail->setFrom('zahidhasankhelna@gmail.com', 'Your Name'); // Set who the message is to be sent from
$mail->addAddress('patsala181@gmail.com', 'Recipient Name'); // Set who the message is to be sent to
$mail->Subject = 'Test Email'; // Set the subject line
$mail->Body = 'This is a test email'; // Set the message body

// Send the email
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
