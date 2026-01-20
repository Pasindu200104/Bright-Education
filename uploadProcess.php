<?php

session_start();

require "connection.php";

if (isset($_SESSION["t"])) {

    $no = $_POST["no"];
    $subject = $_POST["sub"];
    $date = $_POST["date"];

    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];

        $allowed_file_extentions = array("file/pdf", "file/docx","file/rar", "file/zip");
        $file_ex = $file["type"];

        if (!in_array($file_ex, $allowed_file_extentions)) {
            echo ("Please select a valid file type.");
        } else {

            $new_file_extention;

            if ($file_ex == "file/pdf") {
                $new_file_extention = ".pdf";
            } else if ($file_ex == "file/docx") {
                $new_file_extention = ".docx";
            }else if ($file_ex == "file/rar") {
                $new_file_extention = ".rar";
            } else if ($file_ex == "file/zip") {
                $new_file_extention = ".zip";
            }

            $file_name = "resources/uploaded_assignments/" . $_SESSION["t"]["first_name"] . "_" . uniqid() . $new_file_extention;

            move_uploaded_file($file["tmp_name"], $file_name);

            $ass_rs = Database::search("SELECT * FROM `assignment`");
            $ass_data = $ass_rs->fetch_assoc();

            $file_rs = Database::search("SELECT * FROM `upload` WHERE 
            `assignment_id`='" . $ass_data["no"] . "'");
            $file_num = $file_rs->num_rows;

            if ($file_num == 1) {

                Database::iud("UPDATE `upload` SET `path`='" . $file_name . "' WHERE 
                `assignment_id`='" . $ass_data["no"] . "'");
            } else {

                Database::iud("INSERT INTO `upload` (`path`,`assignment_id`) VALUES 
                ('" . $file_name . "','" . $ass_data["no"] . "')");
            }
        }
    }

    // $sub_rs = Database::search("SELECT * FROM `subjects`");
    // $sub_data = $sub_rs->fetch_assoc();

    Database::iud("INSERT INTO `assignment`(`no`,`subjects_id`,`date`,`teacher_id`) 
    VALUES('".$no."','".$subject."','".$date."','".$_SESSION["t"]["email"]."')");

    echo ("success");
} else {
    echo ("Please login first");
}
?>