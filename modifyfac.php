<?php
session_start();

if (isset($_SESSION['login_user'])) {
?>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    <style>
    .nav-link:hover {
        background-color: #8dd8b3;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
    }

    /* Sidebar*/

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        /* Behind the navbar */
        padding: 48px 0 0;
        /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
        .sidebar {
            top: 5rem;
        }
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
    }

    .sidebar .nav-link.active {
        color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    /*Navbar*/
    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
    }

    .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
    }

    .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    #dash:hover {
        background-color: #560058;
        color: white;
    }

    #stat:hover {
        background-color: #7cb8f8;
        color: white;
    }

    #more:hover {
        background-color: #a71777;
        color: white;
    }

    #signinbtn:hover {
        background-color: #343a40;
    }

    a {
        text-decoration: none;
    }

    td,
    tr {
        text-align: center;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="images/Logo.png" width="30" alt="alvas">
            Alva's
            Feedback System</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" id="signinbtn" href="logout.php">Sign out <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" id="dash" aria-current="page" href="admindashboard.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Feedbacks</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link active" href="faculties.php">
                                <span data-feather="shopping-cart"></span>
                                Faculties
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php">
                                <span data-feather="users"></span>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alumni.php">
                                <span data-feather="bar-chart-2"></span>
                                Alumni
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="employer.php">
                                <span data-feather="bar-chart-2"></span>
                                Employer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parent.php">
                                <span data-feather="bar-chart-2"></span>
                                Parent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="event.php">
                                <span data-feather="bar-chart-2"></span>
                                Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="questions.php">
                                <span data-feather="layers"></span>
                                Questions
                            </a>
                        </li>
                    </ul>
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Statistics</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" id="stat" href="#">
                                <span data-feather="file-text"></span>
                                Faculty Analysis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="stat" href="#">
                                <span data-feather="file-text"></span>
                                College Analysis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="stat" href="#">
                                <span data-feather="file-text"></span>
                                Course Analysis
                            </a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="more" href="#">
                                <span data-feather="file-text"></span>
                                More <i class="bi bi-box-arrow-in-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Modify</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <a href="faculties.php" type="button" class="btn btn-light btn-outline-secondary"><i
                                        class="bi bi-arrow-90deg-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="searchForm">
                    <div class="mb-3">
                        <label for="inputId" class="form-label">Enter faculty ID, which has to be updated</label>
                        <input type="text" class="form-control" id="inputId" aria-describedby="text" required>
                    </div>
                    <div id="">
                        <button type="button" class="btn btn-primary" onclick="modify()">Search</button>
                </form>
                <br>
                <br>
                <div id="sec2" style="display:none">
                    <table class="table table-striped" id="viewModTable">
                        <tbody>
                            <tr>
                                <th>Faculty Id</th>
                                <th>Faculty Name</th>
                                <th>Department</th>
                            </tr>
                            <?php
                                /*while ($row = mysqli_fetch_array($sql1)) {
                                echo '
                                <tr class="special">
                                <td>' . $row['f_id'] . '</td>
                                <td>' . $row['ename'] . '</td>
                                <td>' . $row['basic'] . '</td>
                                </tr>';
                            }*/

                                ?>
                            <tr>
                                <td>F101</td>
                                <td>Kishore Raj</td>
                                <td>Chemistry</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> <button class="btn btn-danger" type="button">
                                        Delete Faculty
                                    </button></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">New Details</h1>
                    </div>
                    <form class="row g-3 needs-validation">
                        <div class="col-md-4">
                            <label for="fullNameInput" class="form-label">New Full name</label>
                            <input type="text" class="form-control" id="fullNameInput" required>
                        </div>
                        <div class="col-md-3">
                            <label for="departmentInput" class="form-label">New Department</label>
                            <select class="form-select" id="departmentInput" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Chemistry</option>
                                <option>Biology</option>
                                <option>Physics</option>
                                <option>Mathematics</option>
                                <option>Arts</option>
                                <option>Commerce</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Modify Faculty</button>
                        </div>
                    </form>
                </div>

            </main>



            <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
                crossorigin="anonymous">
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
                integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
                integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
                crossorigin="anonymous">
            </script>
            <script src="dashboard.js"></script>
            <script>
            function modify() {
                document.getElementById('sec2').style.display = "block";
            }
            </script>
</body>

</html>

<?php
} else {
    echo "<script>location.href='adminlogin.php'</script>";
}
?>