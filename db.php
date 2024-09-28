<?php

$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "agroculture";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
