<?php

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "twinkris";
$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

mysqli_set_charset($conn, "utf8");
date_default_timezone_set('Asia/Bangkok');
?>
