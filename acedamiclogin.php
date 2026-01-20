<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acedamic Officer Login | Bright Education</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body class="adminbg">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="row">

                    <div class="col-6 d-flex align-items-center ">
                        <!-- <h1 class="A text-center text-white mt-3"> <i class="bi bi-mortarboard-fill text-danger F"></i>
                            <b class="A text-primary"> Bright</b> <b class="A text-success">Education </b>
                        </h1> -->
                        <!-- <p class="text-center text-info fw-bold fs-5">Best Online Learning Platform</p> -->
                    </div>

                    <div class="col-6 bg-body vh-100">
                        <div class="row">
                            <label class="fw-bold fs-2 text-center mt-3">Acedamic Officer Login</label><br />
                            <span class="fw-bold fs-5 text-info mt-5 text-center">Sign In</span>
                        </div>

                        <div class="row mt-1 mb-1  justify-content-center text-black" id="Alog">

                            <div class="col-8 shadow p-3 mb-5 bg-white border border-1 rounded mt-2 mb-2 border-info">

                                <div class="col-12 mt-2 mb-1">
                                    <span class="fw-bold">Email</span>
                                    <input type="email" class="form-control" id="e3">
                                </div>
                                <div class="col-12 mt-1 mb-1">
                                    <span class="fw-bold">Password</span>
                                    <input type="password" class="form-control" id="p3">
                                </div>
                                <div class="row">
                                    <div class="col-6 text-start mt-2 mb-2">
                                        <input class="form-check-input" type="checkbox" id="r3">
                                        <span class=" text-black">Remember me?</span>
                                    </div>
                                    <div class="col-6 mt-2 mb-2 text-end">
                                        <a href="#" class="text-decoration-none  text-black" onclick="forgotPassword2();">Forgot Password?</a>
                                    </div>
                                </div>

                                <button class="btn btn-success BTN col-6 fw-bold d-grid mt-1 mb-3 offset-3" onclick="acedamicSignin()">Sign in</button>
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
                            <button type="button" class="btn btn-primary" onclick="resetPassword2();">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal -->
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>