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
            <?php include "header.php" ?>
            <div class="col-12">
                <div class="row mb-3">
                    <span class="fw-bold fs-3 text-primary text-center mt-3">Lesson Notes</span>
                    <?php

                    require "connection.php";

                    if (isset($_GET["id"])) {

                        $sid = $_GET["id"];

                        $sub_rs = Database::search("SELECT * FROM `subjects` WHERE `id`='" . $sid . "'");
                        $sub_data = $sub_rs->fetch_assoc();

                        $les_rs = Database::search("SELECT * FROM `add_lesson` WHERE `subjects_id`='".$sid."'");
                        $les_data = $les_rs->fetch_assoc();
                    ?>
                        <span class="fw-bold fs-5 text-center border border-1 bg-light">Subject : <?php echo $sub_data["name"]; ?></span>
                        <div class="col-12">
                            <div class="row mt-2">
                                <div class="col-4 d-flex justify-content-center align-items-center border border-1 bg-light">
                                    <span class="fw-bold text-center ">Lesson No</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center border border-1 bg-secondary">
                                    <span class="fw-bold text-center">Title</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center border border-1 bg-light">
                                    <span class="fw-bold text-center ">Download</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-4 d-flex justify-content-center align-items-center border border-1 bg-light">
                                    <span class="fw-bold text-center"><?php echo $les_data["no"]; ?></span>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center border border-1 bg-secondary">
                                    <span class="fw-bold text-center"><?php echo $les_data["title"]; ?></span>
                                </div>
                                <div class="col-4 d-flex justify-content-center border border-1  bg-light">
                                    <a href="resources/IMG.jpeg.jpeg" download class="col-6">
                                        <button class="btn btn-primary col-12">Download</button>
                                    </a>
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