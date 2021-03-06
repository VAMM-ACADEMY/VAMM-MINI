<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAMM Academy</title>
    <!-- css -->
    <link rel="stylesheet" href="css/login.css">
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
        <a class="navbar-brand" href="home.html">
            <img src="img/logo.png" height="60px" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto pr-4">
                <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
               
                
                <li class="nav-item active">
                    <a class="btn btn-info badge-pill text-white" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- nav// -->
    <!-- container -->
    <div class="container main mb-5">
        <div class="row mb-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 shadow rounded-lg bg-white mb-5">
                <!-- login form -->
               
                <form class="pt-3 mb-5" action="config.php" method="POST">
                    <div class="text-center mb-2">
                        <img src="img/Logo-sym.png"  height="60px" alt="vamm-sym">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control badge-pill" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="Email" title="Please enter your Email" placeholder="Email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="Password" title="Please enter your Password" placeholder="Password" class="form-control badge-pill"  required>
                    </div>
                    <!-- <div class="form-group">
                        <a href="#" role="button">Forget Password?</a>
                    </div> -->
                    <button type="submit" class="btn btn-info badge-pill">Login</button>
                    <div class="text-right mb-2">
                        <a href="create.php" role="button">Create a Account?</a>
                    </div>
                </form>
                <!-- login form// -->
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-- container//-->
  <!-- footer -->
  <footer class="footer fixed-bottom mt-auto mt-5 py-3">
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