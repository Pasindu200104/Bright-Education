<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invite To Register | Bright Education</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bginvite">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="row d-flex justify-content-center">

                    <div class="col-6 ">
                        <label class="fw-bold fs-3 d-flex justify-content-center mt-4 mb-3 text-info">Invite Teachers And Acedamic Officers</label>
                        <form action="inviteProcess.php" method="POST">

                            <p class="fw-bold mt-1 mb-1">Receiver :</p>
                            <input type="email" name="email" class="form-control">

                            <p class="fw-bold mt-1 mb-1">Subject :</p>
                            <input type="text" name="subject" class="form-control">

                            <p class="fw-bold mt-1 mb-1">Message :</p>
                            <textarea class="rounded" name="msg" cols="70" rows="6"></textarea>

                            <br />
                            <div class="row d-flex justify-content-center mt-1">
                                <button class="col-4 btn btn-primary" type="submit">Send Email</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

<script src="bootstrap.bundle.js"></script>
<script src="script.js"></script>
</body>

</html>