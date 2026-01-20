<!DOCTYPE html>
<html>
<?php require "connection.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acedamic Officer Sign Up | Bright Education</title>

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
                    <div class="col-6 BGacedamic"></div>
                    <div class="col-6">
                        <h3 class="fw-bold text-center text-success mt-3">Acedamic Officer Sign UP</h3>
                        <label class="fw-bold fs-5 d-flex justify-content-center mt-3 text-danger">Sign Up</label>
                        <div class="row d-flex justify-content-center mt-2">
                            <div class="col-10 shadow border border-1 rounded border-warning ">

                                <div class="col-12 d-none mt-1" id="msgdiv3">
                                    <div class="alert alert-danger mt-1" role="alert" id="msg3">
                                    </div>
                                </div>

                                <div class="row mt-2 mb-3">
                                    <div class="col-6">
                                        <span class="fw-bold">First Name</span>
                                        <input type="text" class="form-control" id="acf">
                                    </div>
                                    <div class="col-6">
                                        <span class="fw-bold">Last Name</span>
                                        <input type="text" class="form-control" id="acl">
                                    </div>
                                    <div class="col-6">
                                        <span class="fw-bold">Email</span>
                                        <input type="email" class="form-control" id="ace">
                                    </div>
                                    <div class="col-6">
                                        <span class="fw-bold">Password</span>
                                        <input type="password" class="form-control" id="acp">
                                    </div>
                                    <div class="col-6">
                                        <span class="fw-bold">Mobile No</span>
                                        <input type="text" class="form-control" id="acm">
                                    </div>

                                    <div class="col-6">
                                        <span class="fw-bold">Gender</span>
                                        <select class="form-control" id="acg">

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
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button class="btn btn-info BTN col-6 fw-bold d-grid mt-1" onclick="createac();">Create Account</button>
                                    </div>
                                </div>

                            </div>
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