<?php
$servername = "sql205.epizy.com";
$username = "epiz_27228889";
$password = "OdqdNVmsjWZ0";
$dbname = "epiz_27228889_VAMM";

// get the post records
$FULLNAME = $_POST['FULLNAME'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$Password=md5($Password);
$sql = "INSERT INTO VAMMS(FULLNAME, Email, Password)
VALUES ('$FULLNAME', '$Email', '$Password')";


if (mysqli_query($conn, $sql)) {
 
  header("Location: msg.php");

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

