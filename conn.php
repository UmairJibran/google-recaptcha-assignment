<?php
$hostname = "localhost";
$username = "root";
$pwd = "";
$dbName = "google";

$conn = new mysqli($hostname,$username,$pwd);

if ($conn->connect_error) {
  die("connecctio error". $conn->connect_error);
}
 ?>
