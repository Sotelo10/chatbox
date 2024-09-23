<?php
$hostname = "localhost";
$username = "sotelo10";
$password = "sotelo10";
$dbname = "chatbox";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
