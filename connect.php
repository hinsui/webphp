<?php
$servername = "localhost";
$username = "root";
$password = "Winnie024344130";
$dbname = "ab1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>