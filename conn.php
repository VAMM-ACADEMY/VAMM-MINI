<?php
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

mysqli_close($conn);
?>

