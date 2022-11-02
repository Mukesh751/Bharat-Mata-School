<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "schooldb";

$servername = "sql12.freemysqlhosting.net";
$username = "sql12535568";
$password = "BuSa7xA4U6";
$db = "sql12535568";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
