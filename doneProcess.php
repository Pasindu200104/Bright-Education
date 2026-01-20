<?php

require "connection.php";


$no = $_POST["no"];
$title = $_POST["ti"];
// $file = $_POST["file"];


if (empty($no)) {
    echo ("Please Enter the Assignment Number");
} else if (empty($title)) {
    echo ("Please Enter the Assignment Title");
} else {

    $lesson_rs = Database::search("SELECT * FROM `add_lesson`");
    $num_lesson = $lesson_rs->num_rows;

    if ($num_lesson == 1) {
        echo ("Lesson Alredy Added.");
    } else {
        Database::iud("INSERT INTO `add_lesson`(`no`,`title`) VALUES ('".$no."','".$title."')");
        echo("success");
    }

    
    // $length = sizeof($_FILES);

    // if($length <= 3 && $length > 0){

    //     $allowed_img_extentions = array ("image/jpg","image/jpeg","image/png","image/svg+xml");

    //     for($x = 0; $x < $length;$x++){
    //         if(isset($_FILES["image".$x])){

    //             $img_file = $_FILES["image".$x];
    //             $file_extention = $img_file["type"];

    //             if(in_array($file_extention,$allowed_img_extentions)){

    //                 $new_img_extention;

    //                 if($file_extention == "image/jpg"){
    //                     $new_img_extention = ".jpg";
    //                 }else if($file_extention == "image/jpeg"){
    //                     $new_img_extention = ".jpeg";
    //                 }else if($file_extention == "image/png"){
    //                     $new_img_extention = ".png";
    //                 }else if($file_extention == "image/svg+xml"){
    //                     $new_img_extention = ".svg";
    //                 }

    //                 $file_name = "resource//mobile_images//".$title."_".$x."_".uniqid().$new_img_extention;
    //                 move_uploaded_file($img_file["tmp_name"],$file_name);

    //                 Database::iud("INSERT INTO `image`(`code`,`product_id`) VALUES ('".$file_name."','".$product_id."')");

    //             }else{
    //                 echo ("Invalid Image type");
    //             }

    //         }
    //     }

    //     echo ("Product image saved successfully");

    // }else{
    //     echo ("Invalid image count");
    // }



}
