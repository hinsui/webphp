<?php
$servername = "localhost";
$username = "Sho";
$password = "112224";
$dbname = "db_chisanuphong";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>