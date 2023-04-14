<?php

$host = "klusterdb-klu-prod-instance-1.cutmxfdbedwl.us-east-1.rds.amazonaws.com";
$user = "admin";
$pass = "56C9qhm3*x&8F#i42u";
$db = "fxklu";

$connect = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

//echo "Connected MySQL successfully";



?>
