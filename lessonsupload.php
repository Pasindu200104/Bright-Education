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
                    <span class="fw-bold fs-3 text-primary text-center mt-3">Add Lesson Notes</span>
                    <?php

                    require "connection.php";

                    if (isset($_GET["id"])) {

                        $sid = $_GET["id"];

                        $sub_rs = Database::search("SELECT * FROM `subjects` WHERE `id`='".$sid."'");
                        $sub_data = $sub_rs->fetch_assoc();
                    ?>
                        <span class="fw-bold fs-5 text-center border border-1 bg-light">Subject : <?php echo $sub_data["name"]; ?> </span>
                        <div class="col-12">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <div class="col-12">
                                        <span class="fw-bold text-center">Lesson No</span>
                                        <input type="text" class="form-control" id="no" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12">
                                        <span class="fw-bold text-center">Title</span>
                                        <input type="text" class="form-control" id="ti" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12">
                                        <span class="fw-bold text-center col-12">Upload File</span><br>
                                        <div class="row d-flex justify-content-center">
                                            <input type="file" id="fileUpload" class="d-none">
                                            <label for="fileUpload" class="col-10 btn btn-outline-primary" onclick="uploadfiles();">Upload</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-outline-success col-2 d-grid" onclick="done();"><i class="bi bi-check2-circle"></i> Done</button>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                
            </div>
            <?php include "footer.php" ?>
        </div>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
</body>

</html>