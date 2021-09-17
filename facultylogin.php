<?php
include("config.php");
session_start();
if (isset($_SESSION['login_user_faculty'])) {
    header("location: facultydash.php");

}else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = mysqli_real_escape_string($con, $_POST['id']);
                $password = md5(mysqli_real_escape_string($con, $_POST['pwd']));

                $sql = "SELECT * FROM users WHERE u_type='faculty' and u_id= '$id' and u_pass = '$password'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
                $count = mysqli_num_rows($result);

                    if ($count == 1) {
                        $_SESSION['login_user_faculty'] = $id;
                        header("location: facultydash.php");
                    } else {
                        echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script>
                        <script>
                            window.onload = function swal() {
                                Swal.fire({
                                    icon: \'error\',
                            title: \'Oops...\',
                            text: \'Incorrect Credentials!\',
                    })
                            };
                        </script>';
                    }
                }
        
        }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Faculty | Login</title>
</head>

<body>
    <form action="" method="post">

        <div class="imgBox">
            <img src="images/AdminLogo.png" alt="Admin" class="adminLogo">
            <h1>Faculty Login</h1>
        </div>

        <div class="container">
            <label for="uname"><b>UserID</b></label>
            <input type="text" name="id" placeholder="Enter Username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" name="pwd" placeholder="Enter Password" required>

            <button type="submit" name="submit">Login</button>

        </div>
        <div class="homeImgBox">
            <a href="test.php"><img src="images/goback.png" alt="Home" class="goBack"></a>
        </div>
    </form>
</body>

</html>