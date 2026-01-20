<?php

session_start();
require "connection.php";

if(isset($_GET["v"])){

    $v = $_GET["v"];

    $student = Database::search("SELECT * FROM `student` WHERE `verification_code`='".$v."'");
    $num = $student->num_rows;

    if($num == 1){
        $data = $student->fetch_assoc();
        $_SESSION["s"] =$data;
        echo ("success");
    }else{
        echo ("invalid verification code.");
    }

}else{
    echo ("Please enter your verification");
}

?>