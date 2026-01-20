<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Account | Bright Education</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body class="BG">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-dark bg-transperant fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php">Student Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="teacherAcc.php">Teacher Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="acedamiclogin.php">Acedamic Officer Login Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin.php">Admin Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help & Contact</a>
                                    </li>
                                </ul>
                                <form class="d-flex mt-3" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>

                <h1 class="A text-center text-white mt-3"> <i class="bi bi-mortarboard-fill text-danger F"></i>
                    <b class="A text-primary"> Bright</b> <b class="A text-success">Education </b>
                </h1>
                <p class="text-center text-info fw-bold fs-5">Best Online Learning Platform</p>

                <div class="row d-flex justify-content-center">

                    <div class="col-8 text-center">

                        <div class="col-12">
                            <ul class="nav nav-tabs">
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" >Student Account</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php" onclick="changeView();">Student Login</a>
                                </li>

                            </ul>
                        </div>

                        <!-- <div class="row mt-1 mb-1 text-white justify-content-center" id="student">

                            <div class="col-12 d-none" id="msgdiv">
                                <div class="alert alert-danger" role="alert" id="msg">

                                </div>
                            </div>

                            <div class="col-6">
                                <span class="fw-bold">First Name</span>
                                <input type="text" class="form-control" id="f">
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">Last Name</span>
                                <input type="text" class="form-control" id="l">
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">Email</span>
                                <input type="email" class="form-control" id="e">
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">Password</span>
                                <input type="password" class="form-control" id="p">
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">Mobile No</span>
                                <input type="text" class="form-control" id="m">
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">School</span>
                                <input type="text" class="form-control" id="s">
                            </div>
                            <div class="col-6">
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
                            <div class="col-6">
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

                            <button class="btn btn-primary BTN col-6 fw-bold d-grid mt-1" onclick="create();">Create Account</button>
                        </div> -->

                        <div class="row mt-1 mb-1  justify-content-center text-black-50" id="slog">

                            <div class="col-12">
                                <span class="fw-bold">Email</span>
                                <input type="email" class="form-control" id="e2">
                            </div>
                            <div class="col-12">
                                <span class="fw-bold">Password</span>
                                <input type="password" class="form-control" id="p2">
                            </div>
                            <div class="row">
                                <div class="col-6 text-start mt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="r">
                                    <span class=" text-white">Remember me?</span>
                                </div>
                                <div class="col-6 mt-2 mb-2 text-end">
                                    <a href="#" class="text-decoration-none  text-white" onclick="forgotPassword();">Forgot Password?</a>
                                </div>
                            </div>

                            <button class="btn btn-success BTN col-6 fw-bold d-grid mt-1" onclick="signin();" >Sign in</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- modal -->

            <div class="modal" tabindex="-1" id="forgotPasswordModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Forgot Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="np" />
                                        <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();">Show</button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-type Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rnp" />
                                        <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();">Show</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <input type="text" class="form-control" id="vc" />
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal -->

            <!-- model 2-->

            <div class="modal" tabindex="-1" id="verificationModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Student Verification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Enter Your Verification Code That We Send To Your Email</label>
                                <input type="text" class="form-control" id="vcode">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="verify2();">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- model 2-->

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>