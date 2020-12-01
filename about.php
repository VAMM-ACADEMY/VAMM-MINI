<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VAMM";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if($_SESSION['Email']==''){
	header("location: login.php");
}

$email = $_SESSION['Email'];
$result = mysqli_query($conn,"SELECT * FROM VAMMS where Email = '$email'");
// if ($result)
// {
//     echo "this is working ";
// }
// else 
// {
//     echo "this is not working";
// }
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- css// -->
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" height="60px" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto pr-4">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Materials
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="note.php">Notes</a>
                        <a class="dropdown-item" href="Question.php">Practice Questions </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info badge-pill text-white" href="logout.php"><?php echo $row['FULLNAME']; ?> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- nav// -->
    <!-- container -->
    <div class="container main">
        <div class="row">
            <div class="col-md-12 mb-5">
                <!-- <div class="row">
                    <div class="col-md-1">
                        <img src="img/Logo-sym.png" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-11 pt-3">
                        <p class="h3  font-weight-bold mb-0">
                            VAMM ACADEMY
                        </p>
                        <small class="text-muted pl-2 mt-0">
                            A better way to grow your Learning Skills.
                        </small>
                    </div>
                </div> -->
                <div class="cl h3 pl-2 pt-2 mb-2 rounded">
                    <p class="font-weight-bold mb-0">
                        DO YOU KNOW ABOUT
                    </p>
                    <p class="font-weight-bold mt-0">
                        VAMM ACADEMY ?
                    </p>
                </div>
                <p class="h4 font-weight-bold pt-3 pb-2 pl-2 mb-2 rounded vamm mb-0">
                    VAMM ACADEMY
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="h5 pt-2"> Is an Educational website (VAMM Academy) for Software development and
                            programming
                            languages in which we provide study material like notes, videos and related question papers.
                        </p>
                        <p class="h5">
                            Here we make videos regarding programming languages and upload them on our YouTube channel
                            and embed
                            them on our website as well.
                        </p>
                        <p class="h5">
                            Here we provide question papers and notes . Here you can ask for any doubt through email and
                            telegram.
                        </p>
                        <p class="h5">
                            Here we provide specific profile for each student. They can login and start learning.

                            Student can also download our study materials and watch our study videos free of cost.
                        </p>
                        <p class="h5">
                            Nowadays, student wants to study and learn online to improve their knowledge but they don’t
                            know
                            from where they can get the best content on a single website.
                            So our motive is to overcome this problem and make a single website that provide all the
                            essential
                            and best study materials.
                            That’s how we help the students to save time and money.
                        </p>

                    </div>
                    <div class="col-md-6 pt-5 mb-5">
                        <img src="img/undraw/undraw_Profile_data_re_v81r.svg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
                <!-- <small class="h6 text-muted mt-0">
                    A better way to grow your Learning Skills.
                </small> -->
            </div>
        </div>
    </div>
    <!-- container //-->
      <!-- footer -->
      <footer class="footer fixed-bottom mt-auto py-3">
        <div class="container">
          <span class="text-muted">Copyright © All rights reserved | <img src="img/logo.png" height="40"
            alt="" loading="lazy">.</span>
        </div>
      </footer>
    <!-- footer// -->

</body>
<!-- js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
<!-- js// -->


</html>