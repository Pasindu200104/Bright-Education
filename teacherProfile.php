<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | Bright Education</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"  ?>
            <div class="col-12 mb-2">
                <div class="row">
                    <div class="col-2 bg-light">
                        <span class="fw-bold fs-4">Options</span><br />

                        <div class="row mt-1 mb-1 r1">
                            <a href="teacherhome.php" class="text-decoration-none t1"><i class="bi bi-speedometer2"></i> Dashboard</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="teachershedual.php" class="text-decoration-none t1"><i class="bi bi-table"></i> Shedual Classes</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="teacherassignment.php" class="text-decoration-none t1"><i class="bi bi-hourglass-split"></i> Add New Assignments</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="view.php" class="text-decoration-none t1"><i class="bi bi-eye"></i> View Answer Sheets</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="Addmarks.php" class="text-decoration-none t1"><i class="bi bi-upload"></i> Add Marks</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="teacherprofile.php" class="text-decoration-none t1"><i class="bi bi-person-lines-fill"></i> Profile</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="#" class="text-decoration-none t1"><i class="bi bi-question-circle"></i> Help & Contact</a>
                        </div>

                    </div>
                    <?php

                    require "connection.php";

                    if (isset($_SESSION["t"])) {

                        $email = $_SESSION["t"]["email"];

                        $stu = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "'");
                        $data = $stu->fetch_assoc();

                        $image_rs = Database::search("SELECT * FROM `profile_img` WHERE `student_email`='" . $email . "'");
                        $img_data = $image_rs->fetch_assoc();


                        $class_rs = Database::search("SELECT * FROM `class`");
                        $class_data = $class_rs->fetch_assoc();
                    ?>
                        <div class="col-10" style="background-color: #dee2e6;">
                            <div class="row bg-light mt-1">
                                <div class="col-2">
                                    <?php
                                    if (empty($image_data["path"])) {
                                    ?>
                                        <img src="resources/new_user.svg" class="col-12 mt-1 mb-1 rounded-circle" id="img"/>
                                    <?php
                                    } else {
                                    ?>
                                        <img src="<?php echo $img_data["path"]; ?>" class="col-12 mt-1 mb-1 rounded-circle" id="img" />
                                    <?php
                                    }
                                    ?>

                                </div>
                                <div class="col-3  d-flex align-items-center">
                                    <span class="col-10 fw-bold fs-5"><?php echo $data["first_name"] . " " . $data["last_name"]; ?></span>
                                    <span class="fw-bold text-black-50"><?php echo $data["email"]; ?></span>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-3 d-flex align-items-center">
                                <input type="file" class="d-none" id="profileimg" accept="image/*" />
                                    <label for="profileimg" class="btn col-12 d-grid" onclick="changeimg();"><i class="bi bi-pencil-square"></i> Change Profile Pic</label>
                                </div>
                            </div>
                            <div class="col-12 border border-1 rounded mb-2">
                                <div class="row">
                                    <div class="col-6 bg-info border rounded">
                                        <div class="col-12 mt-2 mb-2">
                                            <span class="fw-bold">First Name</span>
                                            <input type="text" class="form-control" value="<?php echo $data["first_name"]; ?>" />
                                            <span class="fw-bold">Last Name</span>
                                            <input type="text" class="form-control" value="<?php echo $data["last_name"]; ?>" />
                                            <span class="fw-bold">Email</span>
                                            <input type="email" class="form-control" readonly value="<?php echo $data["email"]; ?>" />
                                            <span class="fw-bold">Password</span>
                                            <input type="password" class="form-control" readonly value="<?php echo $data["password"]; ?>" />
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="col-6 bg-info border rounded">
                                    <span class="fw-bold">Mobile No</span>
                                            <input type="text" class="form-control" value="<?php echo $data["mobile_no"]; ?>" />
                                            <span class="fw-bold">School</span>
                                            <input type="text" class="form-control" value="<?php echo $data["school"]; ?>" />
                                            <span class="fw-bold">Class</span>
                                            <input type="text" class="form-control" value="<?php echo $class_data["name"] ?>" />
                                    </div>
                                   
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="btn btn-success text-white d-grid col-4 mt-2 mb-2">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <?php include "footer.php" ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>