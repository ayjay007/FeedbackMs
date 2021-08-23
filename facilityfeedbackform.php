<?php

session_start();

if (isset($_SESSION['login_user'])) {

?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <style>
    * {
        font-family: 'Ubuntu', sans-serif;
    }

    form {
        margin-left: 10%;
        margin-right: 10%;
        padding-top: 5%;
        padding-left: 10%;
        padding-right: 10%;
        padding-bottom: 10%;
        border-radius: 5px;
        box-shadow: 0px 1px 8px 1px grey;
    }

    #title {
        padding-top: 5%;
    }

    #submit {
        font-size: 25;
        font-weight: bold;
        box-shadow: 1px 1px 3px 1px rgb(189, 189, 189);
        padding-left: 7%;
        padding-right: 7%;
    }
    </style>
</head>

<body>
    <div class="mb-3" id="title">
        <center>
            <h1 class="display-4">Facility Feedback Form</h1>
            <small class="text-muted">Feedback provided about facilities</small>
            <br><br>
        </center>
    </div>

    <form>
        <div class="mb-3">
            <p class="">
                This questionnaire is to collect information relating to your satisfaction towards facilities and
                services provided for
                creating conducive atmosphere for teaching and learning. The information provided by you will be kept
                confidential and
                will be used as important feedback for quality improvement of the programme of studies/institution.
                <br><br>
            </p>
            <b>
                <label class="form-label">General communication skills</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o1">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o3">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o4">
                        4
                    </label>
                </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Developing practical solutions to work place problems</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Working as part of a team</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Creative in response to workplace challenges</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Their planning and organization skills</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Self-motivated and taking an appropriate level of responsibility</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Open to new ideas and learning new techniques</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Using technology and workplace equipment</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Ability to contribute to the goal of the organization</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Technical knowledge/skill</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Ability to manage/leadership qualities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Technical knowledge/skill</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Ability to manage/leadership qualities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Innovativeness, creativity</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Relationship with seniors/peers/subordinates</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault15" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault15" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault15" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault15" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Involvement in social activities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Obligation to work beyond schedule if required</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
        </div>
        <div>
            <label class="form-label">On a scale of 1 to 10 how do you rate your overall satisfaction with AIET students
                and
                the curriculum?
            </label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option2">
                <label class="form-check-label" for="inlineRadio1">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option2">
                <label class="form-check-label" for="inlineRadio1">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option2">
                <label class="form-check-label" for="inlineRadio1">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">5</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">6</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">7</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">8</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">9</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">10</label>
            </div>
        </div>
        <br>
        <div>
            <label class="form-label">If you were dissatisfied with any aspect, please comment further:
            </label>
            <br>
            <textarea class="form-control" type="text" name="" id="" rows="5"></textarea>
        </div>
        <br>
        <div>
            <label class="form-label">How could our programs be improved? What specific comments do you have regarding
                the curriculum?
            </label>
            <br>
            <textarea class="form-control" type="text" name="" id="" rows="5"></textarea>
        </div>
        </b>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
</body>
<script>
</script>

</html>
<?php
} else {
    echo "<script>location.href='adminlogin.php'</script>";
}
?>