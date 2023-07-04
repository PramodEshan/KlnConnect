<?php
$servername = "localhost";
$username = "root";
$password = "";
$host ="system";

$conn = new mysqli($servername, $username, $password, $host);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>