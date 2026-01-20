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
                            <a href="teacherhome.php" class="text-decoration-none t1"><i class="bi bi-speedometer2"></i> Dashboard</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="teachershedual.php" class="text-decoration-none t1"><i class="bi bi-table"></i> Shedual Classes</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="teacherassignment.php" class="text-decoration-none t1"><i class="bi bi-hourglass-split"></i> Add New Assignments</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="view.php" class="text-decoration-none t1"><i class="bi bi-eye"></i> View Answer Sheets</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="Addmarks.php" class="text-decoration-none t1"><i class="bi bi-upload"></i> Add Marks</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="teacherprofile.php" class="text-decoration-none t1"><i class="bi bi-person-lines-fill"></i> Profile</a>
                        </div>

                        <div class="row mt-1 mb-1 r1">
                            <a href="#" class="text-decoration-none t1"><i class="bi bi-question-circle"></i> Help & Contact</a>
                        </div>

                    </div>
                    <div class="col-10" style="background-color: #dee2e6;">

                        <div class="row mt-2">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="teacherhome.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View Answer Sheets</li>
                                </ol>
                            </nav>
                        </div>

                        <span class="fw-bold fs-3 text-info">View Answer Sheets</span>



                        <br />

                        <div class="col-12 border border-1 rounded mb-2">
                            
                            <div class="row">
                                <div class="col-12 border border-1 rounded mb-2">
                                    <span class="fw-bold fs-5 text-warning">Answer Sheets</span>
                                    <div class="row text-center">
                                        <div class="col-2 border border-1 border-info bg-info">
                                            <span class="fw-bold fs-5">Subject</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info bg-warning">
                                            <span class="fw-bold fs-5">Student Id</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info bg-info">
                                            <span class="fw-bold fs-5">Student Name</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info bg-warning">
                                            <span class="fw-bold fs-5">Assignment Id</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info bg-info">
                                            <span class="fw-bold fs-5">Title</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info bg-warning">
                                            <span class="fw-bold fs-5">View</span>
                                        </div>
                                    </div>
                                    <div class="row text-center mt-2 mb-1">
                                        <div class="col-2 border border-1 border-info d-flex align-items-center justify-content-center">
                                            <span>Science</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info d-flex align-items-center justify-content-center">
                                            <span>Pasindu</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info d-flex align-items-center justify-content-center">
                                            <span>Jivaya</span>
                                        </div>
                                        <div class="col-2 border border-1 border-info">
                                        <button class="btn btn-outline-success col-12"><i class="bi bi-eye-fill"></i></button>
                                        </div>
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