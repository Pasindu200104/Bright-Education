<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["e2"])) {
    $email = $_POST["e2"];

    $student_rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
    $student_num = $student_rs->num_rows;
    if (`status` == 0) {
        if ($student_num > 0) {

            $code = uniqid();

            Database::iud("UPDATE `student` SET `Verification_code`='" . $code . "' WHERE `email`='" . $email . "'");

            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bgpda2001@gmail.com';
            $mail->Password = 'hxcottxbrfyhlgsm';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('bgpda2001@gmail.com', 'Student Verification');
            $mail->addReplyTo('bgpda2001@gmail.com', 'Student Verification');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'eShop Admin Login Verification Code';
            $bodyContent = '<h1 style="color:yellow;">Your verification code is ' . $code . '</h1>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification code sending failed';
            } else {
                echo 'Success';
            }
        } else {
            echo ("You are not a valid user");
        }
    }else{
        echo ("done");
    }
} else {
    echo ("Email field should not be empty.");
}
?>