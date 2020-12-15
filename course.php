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
    <title>VAMM Academy</title>
    <!-- css -->
    <link rel="stylesheet" href="css/course.css">
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
                <li class="nav-item active">
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
    <div class="container-fluid main">
        <div class="row">
            <div class="col-md-12 mb-5">
                <!-- course list -->
                <div class="row">
                    <div class="col-md-3 pt-3 mb-3 ">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill"
                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"
                                title="(Information Processing Skill)">IPS Tutorial</a>
                            <a class="nav-link mb-3" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">C++ Tutorial</a>

                            <!--<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
                        </div>
                    </div>
                    <div class="col-md-9 mb-5 mt-3">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade " id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <!-- course video  c++-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-deck">
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/WQ0rMiUNeIo" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text">
                                                        Introduction To C++
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/CL2xW4W2zKQ" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text ">
                                                        Difference between Procedural oriented and Object
                                                        oriented programming.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/V0KM6IfEXbY" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text">
                                                        Basic Concepts of Object Oriented Programming.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="card-deck">
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/f8twIqL5WZw" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text">
                                                        Tokens & Character Set.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/n43wrN0pRZ0" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text ">
                                                        Data Types.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/h1Mrdt5NLnA" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text">
                                                        Basic Structure of C++ Program.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="card-deck">
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/FK2SJBVyHWQ" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text">
                                                        Hello World in C++.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/LUlYWLmol08" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text ">
                                                        What Is Operators.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/u11aH9cRPtY" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> C++</h5>
                                                    <p class="card-text">
                                                        Arithmetic and Assignment Operator.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <!-- course video ips-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-deck">
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/RLXuHkLHlbo" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold">Information Processing Skills</h5>
                                                    <p class="card-text">
                                                        Generations Of Computer.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/P3_XbKJ9cf4" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold">Information Processing Skills</h5>
                                                    <p class="card-text ">
                                                        Types Of Computers.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/isvp2TAIVlM" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold"> Information Processing Skills</h5>
                                                    <p class="card-text">
                                                        Block Diagram Of Computer & Basic Components Of a Computer.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="card-deck">
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/Tl3WR_6st8I" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold">  Information Processing Skills  </h5>
                                                    <p class="card-text">
                                                        RAM, ROM & Cache Memory.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/zzdVDl2esUE" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold">  Information Processing Skills</h5>
                                                    <p class="card-text ">
                                                        What is Secondary Memory.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <iframe src="https://www.youtube.com/embed/9MVNiKKHT7g" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold">  Information Processing Skills</h5>
                                                    <p class="card-text">
                                                        What is Software & it's Types.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">...</div> -->
                        </div>
                    </div>
                </div>
                <!-- course list //-->
            </div>
        </div>
    </div>
    <!-- container //-->
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
    <footer class="footer fixed-bottom mt-auto py-3 mt-5">
        <div class="container">
            <span class="text-muted">Copyright © All rights reserved | <img src="img/logo.png" height="40" alt=""
                    loading="lazy">.</span>
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
 <script src="js/floating.js"></script>   
<!-- js// -->

</html>