<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = false;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;

    $mail->Username = 'rotich.mercy@strathmore.edu';
    $mail->Password = 'wgxpscsxdspeegdd';
    $mail->setFrom('Nourishkids@gmail.com', 'From Nourishkids');
    $mail->addAddress('rotich.mercy@strathmore.edu');
    $mail->Subject = "New email from " . $name;
    $mail->Body = "You have received an email from " . $name . ".\n\n" . $message;

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Email sent";
    }
}
?>
