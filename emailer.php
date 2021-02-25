<?php
error_reporting(0);
require 'phpmailer/PHPMailerAutoload.php';

function sendemail($email, $subject, $body){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail.drishti.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@drishti.com';
    $mail->Password = 'Drishti123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('info@drishti.com', 'Project Drishti');
    $mail->addAddress($email);
    $mail->addReplyTo('info@drishti.com', 'Project Drishti');

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->send();
}

?>