<?php
$servername = "sql205.epizy.com";
$username = "epiz_27228889";
$password = "OdqdNVmsjWZ0";
$dbname = "epiz_27228889_VAMM";

$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
$Password=md5($Password);

// $query = mysqli_query($conn, "SELECT * FROM VAMMS WHERE Email == '$Email' AND Password == '$Password'");


$res = mysqli_query($conn,"select * from VAMMS where Email='$Email'and Password='$Password'");
$result=mysqli_fetch_array($res);

if ($result)
{
    $_SESSION['Email'] = $Email;
    header("location: index.php");
}
else
 {
     header("location:wrong.php" );
}



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// header( "refresh:2;url=index.html" );
?>


