<?php
session_start();
require "connection.php";

$email = $_POST["e2"];
$password = $_POST["p2"];
$rememberme = $_POST["r"];

if(empty($email)){
    echo ("Please enter your Email");
}else if(strlen($email) > 100){
    echo ("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email");
}else if(empty($password)){
    echo ("Please enter your Password");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo ("Invalid Password");
}else{

    $rs = Database::search("SELECT * FROM `student` WHERE `email`='".$email."' AND 
    `password`='".$password."'");
    $n = $rs->num_rows;

    $st_rs = Database::search("SELECT `status` FROM `student` WHERE `email`='".$email."' AND 
    `password`='".$password."'");
    $sd = $st_rs->fetch_assoc();

    if($sd == 0){

        // $_SESSION["s"] = $sd;
        // echo ("verify");
        // $up_rs = Database::iud("UPDATE `student` SET `status` = '1' WHERE `email` = '".$email."'");

    }else if($n == 1){

        echo ("success");
        $d = $rs->fetch_assoc();
        $_SESSION["s"] = $d;

        if($rememberme == "true"){

            setcookie("email",$email,time()+(60*60*24*365));
            setcookie("password",$password,time()+(60*60*24*365));

        }else{

            setcookie("email","",-1);
            setcookie("password","",-1);

        }


    }else{

        echo ("Invalid Username or Password");

    }
     
}

?>