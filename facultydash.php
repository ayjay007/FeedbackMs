<?php
include "config.php";

session_start();

if (isset($_SESSION['login_user_faculty'])) {
    $userID = $_SESSION['login_user_faculty'];
    $query1 = "select avg(q8) from faculty_feedback where f_id='$userID'";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_array($result1);
    $avg = (round($row1['avg(q8)'])) * 2;

    $query2 = "select * from faculty where f_id='$userID'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($result2);
    $name = ($row2['f_name']);

    $queryDId = "select * from faculty where f_id='$userID'";
    $resultDId = mysqli_query($con, $queryDId);
    $rowDId = mysqli_fetch_array($resultDId);
    $dId = ($rowDId['d_id']);

    $queryq8 = "select avg(q8) from faculty_feedback where f_id='$userID'";
    $resultq8 = mysqli_query($con, $queryq8);
    $rowq8 = mysqli_fetch_array($resultq8);
    $avgq8 = (round($rowq8['avg(q8)'])) * 2;

    $queryq9 = "select avg(q9) from faculty_feedback where f_id='$userID'";
    $resultq9 = mysqli_query($con, $queryq9);
    $rowq9 = mysqli_fetch_array($resultq9);
    $avgq9 = (round($rowq9['avg(q9)'])) * 2;

    $queryq3 = "select avg(q3) from faculty_feedback where f_id='$userID'";
    $resultq3 = mysqli_query($con, $queryq3);
    $rowq3 = mysqli_fetch_array($resultq3);
    $avgq3 = (round($rowq3['avg(q3)'])) * 2;

    $queryq6 = "select avg(q6) from faculty_feedback where f_id='$userID'";
    $resultq6 = mysqli_query($con, $queryq6);
    $rowq6 = mysqli_fetch_array($resultq6);
    $avgq6 = (round($rowq6['avg(q6)'])) * 2;

    $queryq7 = "select avg(q7) from faculty_feedback where f_id='$userID'";
    $resultq7 = mysqli_query($con, $queryq7);
    $rowq7 = mysqli_fetch_array($resultq7);
    $avgq7 = (round($rowq7['avg(q7)'])) * 2;



    $phone = 93456789788;

    $email = "naveenkumar12@gmail.com";

    $lm = 6;
    $cm = 8;

    $notify = 3;

    $overall = 4;

    $overall = ($overall) * 10;

    if ($overall >= 90) {
        $pgbcolor = "success";
    } elseif ($overall >= 60) {
        $pgbcolor = "warning";
    } else {
        $pgbcolor = "danger";
    }
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
    html {
        scroll-behavior: smooth;
    }

    * {
        font-family: 'Ubuntu', sans-serif;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        background-color: rgb(95, 95, 95);

        border-radius: 4px;
        text-decoration: none;

    }

    #head:hover {
        background-color: black;
    }

    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }

    #messageLink:hover {
        transition: 0ms;
        background-color: #007bff;
        color: white;

    }
    </style>

    <title>Student Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="head"><a class="navbar-brand" href="facultydash.php">
            <h2>Faculty Dashboard</h2>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        </div>
        </div>
        <ul class="navbar-nav px-3">
            <div class="navbar-nav"><a class="nav-link active" href="home.html">Home <span
                        class="sr-only">(current)</span></a><a class="nav-link active" href="#">Help</a>
                <a class="nav-link active" href="#">About</a>
                <a class="nav-link active" href="contact.html">Contact Us</a>
                <li class="nav-item text-nowrap"><a class="nav-link" id="signinbtn" href="logout.php">Sign out <i
                            class="bi bi-arrow-right-circle-fill"></i></a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo "$name"; ?></h4>
                                    <p class="text-secondary mb-1">Deptartment : CSE</p>
                                    <p class="text-muted font-size-sm">Department Id: <?php echo "$dId"; ?></p>
                                    <a href="#message" class="btn btn-outline-primary">
                                        Message</a>
                                    <a href="#notifications" class="btn btn-outline-primary">
                                        Notifications <sup><span
                                                class="badge badge-danger"><?php echo "$notify"; ?></span></sup>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo "$name"; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ID</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo "$userID"; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo "$email"; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo "$phone"; ?>
                                </div>
                            </div>

                            <hr>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i
                                            class="material-icons text-info mr-2"></i>Subject-wise analyisis
                                    </h6>
                                    <small>JAVABCA3A</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>JAVABCA3B</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>C++BCA2B</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>FITBCA1A</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>ECOMERCEBCOM2A</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Overall Performance</b></h5>
                                    <div class="progress mb-3" style="height: 15px">
                                        <div class="progress-bar bg-<?php echo "$pgbcolor"; ?>" role="progressbar"
                                            style="width: <?php echo "$overall"; ?>%">
                                        </div>
                                    </div>
                                    <p class="card-text">Here is your monthly performance summary</p>
                                    <p class="card-text"><b>Communication</b></p>
                                    <div class="progress mb-3" style="height: 8px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%"
                                            aria-valuenow="<?php echo "$avg" ?>" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p class="card-text"><b>Teaching</b></p>
                                    <div class="progress mb-3" style="height: 8px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                            aria-valuenow="<?php echo "$avg" ?>" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p class="card-text"><b>Attitude</b></p>
                                    <div class="progress mb-3" style="height: 8px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                            aria-valuenow="<?php echo "$avg" ?>" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <a href="#viewMore" class="btn btn-primary">
                                        View More
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>

        </div>

    </div>
    <center class="bg-light" id="viewMore">
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Performance Analysis
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div class="container">
            <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">

            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Monthly Analysis
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div class="container">
            <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
        </div>

    </center>
    <div class="btn-toolbar mb-2 mb-md-0" id="message" id="message">
        <div class="btn-group mr-2">
        </div>
    </div>
    <div
        class="d-flex bg-light justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">

        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Message
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div class="container">
            <form class="justify-content-center align-items-center">
                <div class="form-group">
                    <textarea type="text" class="form-control" aria-describedby="message" rows="10" cols="5"></textarea>
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3
                border-bottom">
                    <button type="submit" class="btn btn-primary ">Send Message</button>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        </div>
                    </div>
                </div>

                <br><br>
            </form>
        </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        </div>
    </div>
    <div
        class="d-flex bg-light justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">

        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div class="bg-light" id="notifications">
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Notifications
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <center>
            <div class="container">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Here is your anual report</h5>
                            <small>2 days ago</small>
                        </div>
                        <p class="mb-1">This report is generated based on your previous year performance.</p>
                        <small>a copy has also been sent to your e-mail account.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Important : </h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">16/08/21 is the last date of submission of example form</p>
                        <small class="text-muted">This is an important message!</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-warning">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Performance Alert</h5>
                            <small class="text-muted">4 days ago</small>
                        </div>
                        <p class="mb-1">Your performance in the subject code JAVABCA3A has to be improved</p>
                        <small class="text-muted">Look into the detailed analysis</small>
                    </a>
                    <br>
                </div>
            </div>
            <br><br>
        </center>
    </div>
    <br>
    <div class="container text-center">
        <span class="small">
            ALVA’S INSTITUTE OF ENGINEERING & TECHNOLOGY
            <br>Shobhavana Campus, Mijar, Moodubidire - 574 225, Mangalore, DK</span>
    </div>
    <br>


    <script>
    var xValue = ["Time Sense and Punctuality", "Subject Command", "Use of Teaching Aids", "Helping Attitude",
        "Class Control"
    ];
    var yValue = [<?php echo "$avgq8" ?>, <?php echo "$avgq9" ?>, <?php echo "$avgq3" ?>,
        <?php echo "$avgq6" ?>,
        <?php echo "$avgq7" ?>, <?php echo "$avgq7" ?>
    ];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145",
        "#2f5797",
    ];

    new Chart("myChart1", {
        type: "doughnut",
        data: {
            labels: xValue,
            datasets: [{
                backgroundColor: barColors,
                data: yValue
            }]
        },
        options: {
            title: {
                display: true,
                text: ""
            }
        }
    });


    var xValues = ["Last Month", "Current Month"];
    var yValues = [<?php echo "$lm"; ?>, <?php echo "$cm"; ?>, 0, 10];
    var barColor = ["783fd5", "#2b5797"];


    new Chart("myChart2", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColor,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: ""
            }
        }
    });
    </script>
</body>

</html>
<?php
} else {
    echo "<script>location.href='facultylogin.php'</script>";
}
?>