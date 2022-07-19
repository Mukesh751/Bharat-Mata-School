<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "schooldb";

$servername = "remotemysql.com";
$username = "Kw9ZVIpjAA";
$password = "7MCST81P1z";
$db = "Kw9ZVIpjAA";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>