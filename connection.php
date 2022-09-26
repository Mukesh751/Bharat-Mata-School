<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "schooldb";

$servername = "remotemysql.com";
$username = "Zb6j56iNBQ";
$password = "JHxSTOiKRK";
$db = "Zb6j56iNBQ";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
