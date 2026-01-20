<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST["email"];
$subject = $_POST["subject"];
$msg = $_POST["msg"];


$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'bgpda2001@gmail.com';
$mail->Password = 'hxcottxbrfyhlgsm';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('bgpda2001@gmail.com', 'Register In Site');
$mail->addReplyTo('bgpda2001@gmail.com', 'Register In Site');
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject =$subject;
$bodyContent = $msg;
$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo 'Verification failed';

}else{
    echo 'Success';
    }
