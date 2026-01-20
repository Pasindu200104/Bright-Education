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

            <div class="col-12">
                <div class="row">
                    <div class="col-2 vh-100" style="background-color: #343a40;">
                        <div class="row text-white mt-4 mb-4 ">
                            <span class="fw-bold fs-5 mt-2 mb-3 text-center">Pasindu Dilshan</span>
                            <hr />
                            <span class="mt-2 mb-1"><i class="bi bi-journal-plus"></i> Register Student</span>
                            <span class="mt-1 mb-1"><i class="bi bi-eye"></i> View Marks</span>
                            <span class="mt-1 mb-1"><i class="bi bi-send-plus"></i> Releas Marks</span>
                            <span class="mt-1 mb-3"><i class="bi bi-person-lines-fill"></i> Profile</span>
                            <hr>
                            <span class="mt-1 mb-1"><i class="bi bi-box-arrow-left"></i> Log Out</span>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div class="col-12 text-center mt-2">
                                <span class="fw-bold fs-4 text-danger">Register Students</span>
                            </div>
                            <div class="col-12">
                                <div class="row d-flex justify-content-center bg-light mt-1 mb-4">

                                    <div class="col-12 d-none" id="msgdiv">
                                        <div class="alert alert-danger" role="alert" id="msg">

                                        </div>
                                    </div>
                                    <div class="col-6 mt-3 mb-3">


                                        <div class="col-12">
                                            <span class="fw-bold">First Name</span>
                                            <input type="text" class="form-control" id="f">
                                        </div>
                                        <div class="col-12">
                                            <span class="fw-bold">Last Name</span>
                                            <input type="text" class="form-control" id="l">
                                        </div>
                                        <div class="col-12">
                                            <span class="fw-bold">Email</span>
                                            <input type="email" class="form-control" id="e">
                                        </div>
                                        <div class="col-12">
                                            <span class="fw-bold">Password</span>
                                            <input type="password" class="form-control" id="p" placeholder="(Optional)">
                                        </div>


                                    </div>

                                    <div class="col-6 mt-3 mb-3">
                                        <div class="col-12">
                                            <span class="fw-bold">Mobile No</span>
                                            <input type="text" class="form-control" id="m">
                                        </div>
                                        <div class="col-12">
                                            <span class="fw-bold">School</span>
                                            <input type="text" class="form-control" id="s">
                                        </div>
                                        <div class="col-12">
                                            <span class="fw-bold">Grade</span>
                                            <select class="form-control" id="gr">

                                                <?php

                                                require "connection.php";

                                                $rs = Database::search("SELECT * FROM `grade`");

                                                $n = $rs->num_rows;

                                                for ($x = 0; $x < $n; $x++) {
                                                    $d = $rs->fetch_assoc();

                                                ?>

                                                    <option value="<?php echo $d["id"]; ?>"><?php echo $d["name"]; ?></option>

                                                <?php

                                                }

                                                ?>

                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <span class="fw-bold">Gender</span>
                                            <select class="form-control" id="ge">

                                                <?php

                                                $rs = Database::search("SELECT * FROM `gender`");

                                                $n = $rs->num_rows;

                                                for ($x = 0; $x < $n; $x++) {
                                                    $d = $rs->fetch_assoc();

                                                ?>

                                                    <option value="<?php echo $d["id"]; ?>"><?php echo $d["name"]; ?></option>

                                                <?php

                                                }

                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary BTN col-6 fw-bold d-grid mt-1 mb-3" onclick="create();">Register</button>
                                </div>



                                <!-- <footer class="footer">

                                    <div class="row text-muted">
                                        <div class="col-6 text-start">
                                            <p class="">
                                                <a class="text-muted" href="#" target="_blank"><strong>Bright Education</strong></a> - 2023 Bright Education.lk &copy;
                                            </p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="text-muted" href="#" target="_blank">Help Center</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="text-muted" href="#" target="_blank">Privacy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="text-muted" href="#" target="_blank">Terms</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </footer> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>