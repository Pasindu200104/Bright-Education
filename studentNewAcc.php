<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$school = $_POST["s"];
$grade = $_POST["gr"];
$gender = $_POST["ge"];

if (empty($fname)) {
    echo ("Please enter your First Name!");
} else if (strlen($fname) > 50) {
    echo ("First Name must have LESS THAN 50 characters!");
}else if (empty($lname)) {
    echo ("Please enter your Last Name!");
} else if (strlen($lname) > 50) {
    echo ("Last Name must have LESS THAN 50 characters!");
}else if(empty($email)){
    echo("Please enter your Email address!");
}else if(strlen($email)>100){
    echo ("Email must have LESS THAN 100 characters!");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email address!");
}else if(empty($mobile)){
    echo ("Please enter your Mobile Number!");
}else if(strlen($mobile) != 10){
    echo ("Mobile Number must contain 10 characters");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo ("Invalid Mobile Number!");
}else{

$rs = Database::search("SELECT * FROM `student` WHERE `email`='".$email."' OR 
`mobile_no`='".$mobile."'");
$n = $rs->num_rows;

if($n > 0){
    echo ("Student with the same Email or Mobile already exists.");

}else{

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `student` 
    (`first_name`,`last_name`,`email`,`password`,`mobile_no`,`school`,`joined_date`,`status`,`grade_id`,`gender_id`)
    VALUES ('".$fname."','".$lname."','".$email."','".$password."','".$mobile."',
    '".$school."','".$date."','0','".$grade."','".$gender."')");

  

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
            $bodyContent = '<h3 style="color:blue;">Your Email is '.$email.'<br>
           Your Password is - '.$code.'</h3><br>
            <h5>Use this Password and Your Email to Login to your Bright Education student Account.<br>
            Thank You. </h5>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Student Details sending failed';
            } else {
                echo ("success");
            }

}
    
}

?>