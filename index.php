<?php
session_start();
$servername = "sql205.epizy.com";
$username = "epiz_27228889";
$password = "OdqdNVmsjWZ0";
$dbname = "epiz_27228889_VAMM";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if($_SESSION['Email']==''){
	header("location: home.html");
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
    <title>VAMM Academy</title>
    <!-- css -->
    <link rel="stylesheet" href="css/first.css">
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
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
                    <a class="nav-link" href="course.php">Video</a>
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
                <div class="row">

                    <div class="col-md-6">
                        <img src="img/undraw/ill_landing-01.png" class="img-fluid first-img" alt="Responsive image">
                    </div>
                    <div class="col-md-6">
                        <img src="img/Logo-sym.png" class="logo-sym mb-3" height="80px" alt="" loading="lazy">
                        <p class="h1 first font-weight-bold">
                            VAMM ACADEMY
                        </p>
                        <p class="h3 text-muted">
                            A better way to grow your Learning Skills.
                        </p>
                        <div class="mt-3">
                            <a class="btn btn-light text-dark badge-pill btn-lg" href="#watch" data-toggle="modal"
                                id="btn" data-target="#staticBackdrop2" onclick="playPause1()" role="button"><i
                                    class="far fa-play-circle"></i> Watch
                                Video</a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border-0">
                            <div class="modal-header text-white">
                                <h5 class="modal-title" id="staticBackdropLabel">Get Started</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control badge-pill" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control badge-pill"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <a href="#" role="button">Forget Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-info badge-pill">Login</button>
                                    <div class="text-right">
                                        <a href="create.php" role="button">Create a Account?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 2 -->
                <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content border-0">
                            <div class="modal-header text-white">
                                <!-- <h5 class="modal-title" id="staticBackdropLabel">Get Started</h5> -->
                                <button type="button" onclick="playPause()" class="close text-white"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- intro -->
                                 <video id="video1" width="100%">

                                    <source src="video/VAMM-ACADEMY.mp4" type="video/mp4">

                                </video> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <p class="h1 text-center font-weight-bold text-capitalize my-card mb-5">our Features</p>
                <!-- card -->
                <div class="card-deck">
                    <div class="card bg-info-custom  border-0 shadow">
                        <img src="img/undraw/notes.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Notes</h5>
                            <p class="card-text">We provide you updated notes on your related study and latest
                                technology updates.</p>
                        </div>
                    </div>
                    <div class="card bg-info-custom  border-0 shadow">
                        <img src="img/undraw/undraw_online_video_ivvq.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Free Video Lectures</h5>
                            <p class="card-text">We provide you videos lectures on programming languages and about
                                software development.</p>
                        </div>
                    </div>
                    <div class="card bg-info-custom  border-0 shadow">
                        <img src="img/undraw/undraw_exams_g4ow.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Question and Query</h5>
                            <p class="card-text">We provide you the latest practice question papers and support of query
                                resolution through Email and Telegram.</p>
                        </div>
                    </div>
                </div>
                <!-- card// -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">

            </div>
        </div>
    </div>

    <!-- container// -->
     <!-- floating button -->
    <div class="zoom mb-5">
    <a class="zoom-fab zoom-btn-large text-decoration-none bg-primary text-white" title="Question and Query" id="zoomBtn"><i class="far fa-comment-dots fa-2x pt-3"></i></a>
    <ul class="zoom-menu pt-2">
      <li><a class="zoom-fab zoom-btn-sm zoom-btn-person scale-transition scale-out text-white" href="mailto:bvocsdcc@gmail.com"><i class="fas fa-at"></i></a></li>
      <li><a class="zoom-fab zoom-btn-sm zoom-btn-doc scale-transition scale-out text-white" href="https://t.me/VAMMACADEMY" target="_blank"><i class="fas fa-paper-plane"></i></a></li>
    </ul>
    <!-- <div class="zoom-card scale-transition scale-out">
      <ul class="zoom-card-content">
      <li>Content</li>
      <li>Content</li>

      </ul>
    </div> -->
  </div>
    <!-- floating button// -->
    <!-- footer -->
    <footer class="footer fixed-bottom mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="text-muted">Copyright © All rights reserved | <img src="img/logo.png" height="40"
                            alt="" loading="lazy">.</span>
                </div>
                <div class="col-md-6 text-right">
                    <!-- <a href="https://www.youtube.com/channel/UC7auvPGFU4PAdf1OHlKkV9Q" target="_blank" class="text-danger"><i
                            class="fab fa-youtube mt-2 fa-2x"></i></a>
                            <i class="fab fa-facebook text-primary mt-2 fa-2x"></i> -->
                </div>
            </div>

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
<script src="js/button.js"></script>
<script src="js/test.js"></script>
<script src="js/floating.js"></script>
<!-- js// -->

</html>