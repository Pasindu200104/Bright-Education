<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row mt-1 mb-1">
                    <div class="col-3">
                        <h4 class="A1 text-white"> <i class="bi bi-mortarboard-fill text-danger "></i>
                            <b class="A1 text-primary"> Bright</b> <b class="A1 text-success">Education </b>
                        </h4>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-1"></div>

                    <div class="col-3">
                        <?php

                        session_start();

                        if (isset($_SESSION["s"])) {

                            $data = $_SESSION["s"];

                        ?>
                            <span class="text-center"><b>Hi!</b> <?php echo $data["first_name"]; ?></span>
                            <!-- <span class="text-lg-start"><b>Welcome </b><?php echo $data["fname"]; ?></span> | -->
                            <!-- <span class="text-lg-start fw-bold signout" onclick="signout();">Sign Out</span> -->
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <i class="bi bi-bell" style="cursor: pointer;"></i>
                            </div>
                            <div class="col-4">
                                <i class="bi bi-box-arrow-left" onclick="signout();" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>

                <?php

                        } else {

                ?>

                    <a href="index.php" class="text-decoration-none fw-bold">Sign In or Register</a>
             
                <?php
 }
                       
                        

                ?>

                <?php
                if (isset($_SESSION["t"])) {

                    $data = $_SESSION["t"];
                ?>
                    <span class="text-center"><b>Hi!</b> <?php echo $data["first_name"]; ?></span>
                    <!-- //             <span class="text-lg-start"><b>Welcome </b><?php echo $data["fname"]; ?></span> | -->
                    <!-- //             <span class="text-lg-start fw-bold signout" onclick="signout();">Sign Out</span> -->
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <i class="bi bi-bell" style="cursor: pointer;"></i>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-box-arrow-left" onclick="signout2();" style="cursor: pointer;"></i>
                        </div>
                    </div>
                </div>

            <?php

                        }

            ?>

                <!-- <a href="index.php" class="text-decoration-none fw-bold ">Sign In or Register</a> -->

          
            </div>

        </div>
    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>