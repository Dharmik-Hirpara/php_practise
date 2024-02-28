<?php
$servername = "localhost";
$username = ""; 
$password = ""; 
$database_name = ""; // Add your database name here

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connection established successfully";
?>
