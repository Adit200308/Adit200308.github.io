<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "webtitans";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  //  die("Failed to connect to DB: " . $conn->connect_error);
} else {
    //echo "Connection successful!";
}
?>
