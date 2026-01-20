<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["e"])){
    $email = $_POST["e"];

    $student_rs = Database::search("SELECT * FROM `student` WHERE `email`='".$email."'");
    $student_num = $student_rs->num_rows;

    if($student_num > 0){

        $code = uniqid();

        Database::iud("UPDATE `student` SET `password`='".$code."' WHERE `email`='".$email."'");

        $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bgpda2001@gmail.com';
            $mail->Password = 'hxcottxbrfyhlgsm';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('bgpda2001@gmail.com', 'Student Login Details');
            $mail->addReplyTo('bgpda2001@gmail.com', 'Student Login Details');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Bright Education Student Login Details';
            $bodyContent = '<h1 style="color:blue;">Your Email is '.$email.'</h1><br>
            <h1 style="color:blue;">Your Password is - '.$code.'</h1><br>
            <h5>Use this Password and Your Email to Login to your Bright Education student Account.<br>
            Thank You. </h5>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Student Details sending failed';
            } else {
                echo 'Success';
            }

    }else{
        echo ("You are not a valid user");
    }

}else{
    echo ("Email field should not be empty.");
}

?>