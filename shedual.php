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
                            <a href="profile.php" class="text-decoration-none t1"><i class="bi bi-person-lines-fill"></i> Student Profile</a>
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
                                    <li class="breadcrumb-item active" aria-current="page">Shedualed Classes</li>
                                </ol>
                            </nav>
                        </div>

                        <span class="fw-bold fs-3 text-info">Shedualed Classes</span>


                        <div class="col-12 bg-light border border-1 rounded">
                            <span class="fw-bold ms-2">School :</span>
                            <span>pl/BMCC</span><br />
                            <span class="fw-bold ms-2">Grade :</span>
                            <span>13 A/L</span><br />
                            <span class="fw-bold ms-2">Student ID :</span>
                            <span>216541626</span><br />
                        </div>
                        <br />

                        <div class="col-12 border border-1 rounded mb-2">
                            <span class="fw-bold fs-5 text-warning">Live Classes</span>
                            <div class="row">
                                <div class="col-3 ">
                                    <div class="card card2 mb-3 subbox" style="max-width: 18rem;">
                                        <div class="card-header bg-info text-center border-success">Online Live Class</div>
                                        <div class="card-body text-success">
                                            <h5 class="card-title">Science</h5>
                                            <span class="card-text">Lesson : Lesson Name</span>
                                            <span class="card-text">2023/01/01 9.00 AM</span>
                                        </div>
                                        <div class="card-footer bg-transparent border-success text-center"><a href="#" class="">Click Here To Join Class</a></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card card2 subbox mb-3" style="max-width: 18rem;">
                                        <div class="card-header bg-info text-center border-success">Online Live Class</div>
                                        <div class="card-body text-success">
                                            <h5 class="card-title">Science</h5>
                                            <span class="card-text">Lesson : Lesson Name</span>
                                            <span class="card-text">2023/01/01 9.00 AM</span>
                                        </div>
                                        <div class="card-footer bg-transparent border-success text-center"><a href="#" class="">Click Here To Join Class</a></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card card2 subbox mb-3" style="max-width: 18rem;">
                                        <div class="card-header bg-info text-center border-success">Online Live Class</div>
                                        <div class="card-body text-success">
                                            <h5 class="card-title">Science</h5>
                                            <span class="card-text">Lesson : Lesson Name</span>
                                            <span class="card-text">2023/01/01 9.00 AM</span>
                                        </div>
                                        <div class="card-footer bg-transparent border-success text-center"><a href="#" class="">Click Here To Join Class</a></div>
                                    </div>
                                </div>
                               
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