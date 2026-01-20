<!DOCTYPE html>
<html>
<?php require "connection.php"; ?>

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
                                <a href="home.php" class="text-decoration-none t1"><i class="bi bi-speedometer2"></i> Dashboard</a>
                            </div>

                            <div class="row mt-1 mb-1 r1">
                                <a href="shedual.php" class="text-decoration-none t1"><i class="bi bi-table"></i> Shedualed Classes</a>
                            </div>

                            <div class="row mt-1 mb-1 r1">
                                <a href="assignment.php" class="text-decoration-none t1"><i class="bi bi-hourglass-split"></i> Exam & Assignments</a>
                            </div>

                            <div class="row mt-1 mb-1 r1">
                                <a href="submit.php" class="text-decoration-none t1"><i class="bi bi-upload"></i> Submit Assignments</a>
                            </div>

                            <div class="row mt-1 mb-1 r1">
                                <a href="profile.php" class="text-decoration-none t1"><i class="bi bi-person-lines-fill"></i> Profile</a>
                            </div>

                            <div class="row mt-1 mb-1 r1">
                                <a href="#" class="text-decoration-none t1"><i class="bi bi-question-circle"></i> Help & Contact</a>
                            </div>
                        




                    </div>
                    <div class="col-10" style="background-color: #dee2e6;">

                        <div class="row mt-2">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>

                        <span class="fw-bold fs-3 text-info">Dashboard</span>


                        <div class="col-12 bg-light border border-1 rounded">
                            <?php

                            $stu_rs = Database::search("SELECT * FROM `student`");
                            $stu_num = $stu_rs->num_rows;

                            // $stu_id = uniqid();

                            for ($y = 0; $y < $stu_num; $y++) {
                                $stu_data = $stu_rs->fetch_assoc();
                            ?>
                                <span class="fw-bold ms-2">School :</span>
                                <span><?php echo $stu_data["school"] ?></span><br />
                                <span class="fw-bold ms-2">Grade :</span>
                                <span><?php echo $stu_data["grade_id"] ?></span><br />
                                <!-- <span class="fw-bold ms-2">Student ID :</span>
                                <span><?php echo $stu_id; ?></span><br /> -->

                            <?php
                            }
                            ?>

                        </div>
                        <br />

                        <div class="col-12 border border-1 rounded mb-2">


                            <span class="fw-bold fs-5 text-warning">Subjects</span>
                            <div class="row">
                                <?php

                                $sub_rs = Database::search("SELECT * FROM `subjects`");
                                $sub_num = $sub_rs->num_rows;

                                for ($x = 0; $x < $sub_num; $x++) {
                                    $sub_data = $sub_rs->fetch_assoc();

                                ?>
                                    <div class="col-3 mb-2">
                                        <a href='<?php echo "lessons.php?id=" . ($sub_data["id"]); ?>'>

                                            <div class="card ms-0 m-0 text-bg-dark bor2">
                                                <img src="resources/background 01.jpg" class="card-img" style="height: 200px;">
                                                <div class="card-img-overlay text-center d-flex align-items-center justify-content-center">
                                                    <h5 class="card-title"><?php echo $sub_data["name"]; ?></h5>
                                                </div>
                                            </div>

                                        </a>
                                    </div>


                                <?php
                                }
                                ?>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.php" ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>