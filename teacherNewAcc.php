<?php

require "connection.php";

$fname = $_POST["tf"];
$lname = $_POST["tl"];
$email = $_POST["te"];
$password = $_POST["tp"];
$mobile = $_POST["tm"];
$school = $_POST["ts"];
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
}else if(empty($password)){
    echo ("Please enter your Password!");
}else if(strlen($password)<5 || strlen($password)>20){
    echo ("Password length must be between 5 and 20!");
}else if(empty($mobile)){
    echo ("Please enter your Mobile Number!");
}else if(strlen($mobile) != 10){
    echo ("Mobile Number must contain 10 characters");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo ("Invalid Mobile Number!");
}else if (empty($school)) {
    echo ("Please enter your School Name!");
} else if (strlen($school) > 100) {
    echo ("School must have LESS THAN 100 characters!");
}{

$rs = Database::search("SELECT * FROM `teacher` WHERE `email`='".$email."' OR 
`mobile_no`='".$mobile."'");
$n = $rs->num_rows;

if($n > 0){
    echo ("Teacher with the same Email or Mobile already exists.");
}else{

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `teacher` 
    (`first_name`,`last_name`,`email`,`password`,`mobile_no`,`school`,`joined_date`,`status`,`gender_id`)
    VALUES ('".$fname."','".$lname."','".$email."','".$password."','".$mobile."',
    '".$school."','".$date."','0','".$gender."')");

    echo ("success");

}
    
}

?>