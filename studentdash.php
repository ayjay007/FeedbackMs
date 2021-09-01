<?php

session_start();

if (isset($_SESSION['login_user_student'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <style>
    * {
        font-family: 'Ubuntu', sans-serif;
    }

    a:hover {
        background-color: rgb(95, 95, 95);

        border-radius: 4px;

    }

    #head:hover {
        background-color: black;
    }
    </style>

    <title>Student Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="head"><a class="navbar-brand" href="#">
            <h2>Student Dashboard</h2>
        </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        </div>
        </div>
        <ul class="navbar-nav px-3">
            <div class="navbar-nav"><a class="nav-link active" href="#">Home <span
                        class="sr-only">(current)</span></a><a class="nav-link active" href="home.html">Help</a>
                <a class="nav-link active" href="#">About</a>
                <a class="nav-link active" href="contact.html">Contact Us</a>
                <li class="nav-item text-nowrap"><a class="nav-link" id="signinbtn" href="logout.php">Sign out <i
                            class="bi bi-arrow-right-circle-fill"></i></a></li>
        </ul>
    </nav><br>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Feedbacks
        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <br><br>
    <div class="row text-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Faculty Feedback</h5>
                    <p class="card-text">Provide feedbacks about your faculties.</p><a href="yoursubjects.php"
                        class="btn btn-primary">Give Feedback</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Facility Feedback</h5>
                    <p class="card-text">Provide feedbacks about the facilities provided by the organisation</p><a
                        href="FaciltyForm.php" class="btn btn-primary">Give Feedback</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row text-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Course Feedback</h5>
                    <p class="card-text">Provide feedbacks about your Course.</p><a href="#"
                        class="btn btn-primary">Give Feedback</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Department Feedback</h5>
                    <p class="card-text">Provide feedbacks about the Department you are associated with.</p><a href="#"
                        class="btn btn-primary">Give Feedback</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
} else {
    echo "<script>location.href='studentlogin.php'</script>";
}
?>