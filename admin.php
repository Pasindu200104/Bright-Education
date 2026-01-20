<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Bright Education</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body>
    <div class=" container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="row">

                    <div class="col-6 d-flex align-items-center bg-danger adminbg2">


                        <!-- <h1 class="A text-center text-white mt-3"> <i class="bi bi-mortarboard-fill text-danger F"></i>
                            <b class="A text-primary"> Bright</b> <b class="A text-success">Education </b>
                        </h1> -->
                        <!-- <p class="text-center text-info fw-bold fs-5">Best Online Learning Platform</p> -->
                    </div>

                    <div class="col-6 bg-body vh-100">
                        <div class="row">
                            <label class="fw-bold fs-2 text-center mt-3">Admin Login</label><br />
                            <span class="fw-bold fs-5 text-warning mt-5 text-center">Sign In</span>
                        </div>

                        <div class="row mt-1 mb-1  justify-content-center text-black" id="Alog">

                            <div class="col-8 shadow p-3 mb-5 bg-white border border-1 rounded mt-2 mb-2 border-warning">

                                <div class="col-12 mt-4 mb-1">
                                    <span class="fw-bold">Email</span>
                                    <input type="email" class="form-control" id="e2">
                                </div>


                                <button class="btn btn-success BTN col-6 fw-bold d-grid mt-3 mb-4 offset-3" onclick="adminVerification();">Get Verification Code</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- model -->

                <div class="modal" tabindex="-1" id="verificationModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Admin Verification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Enter Your Verification Code That We Send To Your Email</label>
                                <input type="text" class="form-control" id="vcode">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- model -->
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>