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
    <link rel="stylesheet" href="css/note.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                    <a class="nav-link" href="index.php">Home </a>
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
    <div class="container-fluid main">
        <div class="row">
            <div class="col-md-12 mb-5">
                <p class="h1 text-center  font-weight-bold text-capitalize cl pt-2 pb-2">
                    Notes</p>
                <!-- notes -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Programming Language</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Operting System</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Networking</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Database</a>
                            <a class="nav-link" id="v-pills-others-tab" data-toggle="pill" href="#v-pills-others"
                                role="tab" aria-controls="v-pills-others" aria-selected="false">Others</a>

                        </div>
                    </div>
                    <div class="col-md-9 mb-5">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Programming language -->
                            <div class="tab-pane fade show active mb-5" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="card-deck">

                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/15Mri4XfkzZrLIIBIDwCfiCDqJGejBVlq/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/15Mri4XfkzZrLIIBIDwCfiCDqJGejBVlq/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">HTML</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1ORqbOXiS7aQWAGeU2SBFQaHqHeV53zEd/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1ORqbOXiS7aQWAGeU2SBFQaHqHeV53zEd/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">C++</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1vxBElDIsB9LoWoij8ymZIqKZdxC6jMsS/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1vxBElDIsB9LoWoij8ymZIqKZdxC6jMsS/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">CSS</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="card-deck">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1PUUoktcdMXISysGEve9QuXe98muanQZS/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1PUUoktcdMXISysGEve9QuXe98muanQZS/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">JAVA</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1OrPLs2u07pK7lslLTPYkJIQBHY4Gp0_m/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1OrPLs2u07pK7lslLTPYkJIQBHY4Gp0_m/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">JAVASCRIPT</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1tLVzhw_P9tWe5YgPg9g7uEbldksjCNAk/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1tLVzhw_P9tWe5YgPg9g7uEbldksjCNAk/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">PYTHON</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Programming language //-->
                            <!-- Operating -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--when we have three card need to adjust col-md-4 to col-md-12 -->

                                        <div class="card-deck">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/15iIKRwznCV2xfmr6RuZNMl8ezQfjGnYh/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/15iIKRwznCV2xfmr6RuZNMl8ezQfjGnYh/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">Linux OS</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <!-- Operating //-->
                            <!-- Networking -->
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="card-deck">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="notes/https://drive.google.com/file/d/1Y547gZqgO7lAt6maGkFmnhFCD7JHbq68/view?usp=sharing"
                                                            target="_blank" class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="notes/https://drive.google.com/file/d/1Y547gZqgO7lAt6maGkFmnhFCD7JHbq68/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">Network Fundamentals</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1CT8CfQVwrJYAyzEfejjlPBgC8899wX_p/view?usp=sharing"
                                                            target="_blank" class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1CT8CfQVwrJYAyzEfejjlPBgC8899wX_p/view?usp=sharing"
                                                        target="_blank" class="btn btn-primary btn-sm">ACN(Advance
                                                        Computer Network)</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- Networking //-->
                            <!-- Database -->
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card-deck">

                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1TzGBmKqfrNeSc2sKSm_WvIzCdcQ8LELA/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1TzGBmKqfrNeSc2sKSm_WvIzCdcQ8LELA/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">DBMS Skills 1</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1q3bKnrfXcscbNEPhot-ZMRdZbvR4lztS/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1q3bKnrfXcscbNEPhot-ZMRdZbvR4lztS/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">DBMS Skills 2</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Database// -->
                            <!-- Others -->
                            <div class="tab-pane fade" id="v-pills-others" role="tabpanel"
                                aria-labelledby="v-pills-others-tab">
                                <div class="row mb-4 mt-2">
                                    <div class="col-md-12">
                                        <div class="card-deck">

                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a
                                                            href="https://drive.google.com/file/d/12qJqgJ2vdZ2rcdk3p0-3KkJtH2xNy2nM/view?usp=sharing"
                                                            target="_blank" class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a
                                                            href="https://drive.google.com/file/d/12qJqgJ2vdZ2rcdk3p0-3KkJtH2xNy2nM/view?usp=sharing"
                                                        target="_blank" class="btn btn-primary btn-sm">IPS(Information
                                                        processing
                                                        Skills)</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1DZE6sYwKfYAUVj4W00gdqwtjwB47XbiH/view?usp=sharing"
                                                            target="_blank" class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1DZE6sYwKfYAUVj4W00gdqwtjwB47XbiH/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">Digital Electronics</a>
                                                </div>
                                            </div>


                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/1tWf6EK326USOl8TQdI8XlEw4kqHR7E4N/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/1tWf6EK326USOl8TQdI8XlEw4kqHR7E4N/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">Software Testing</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-deck">

                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <p class="h4"> <a href="https://drive.google.com/file/d/17JK3W_Fm-Enzkr4rwHfDT2q5iq1YjDwd/view?usp=sharing" target="_blank"
                                                            class="mb-0"><i
                                                                class="far fa-file-pdf fa-4x pt-2 text-dark"></i></a>
                                                    </p> <a href="https://drive.google.com/file/d/17JK3W_Fm-Enzkr4rwHfDT2q5iq1YjDwd/view?usp=sharing" target="_blank"
                                                        class="btn btn-primary btn-sm">Cloud Computing</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--Others // -->
                        </div>
                    </div>
                </div>
                <!-- notes// -->
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
<script src="js/button.js"></script>
<script src="js/test.js"></script>
<script src="js/floating.js">
<!-- js// -->

</html>