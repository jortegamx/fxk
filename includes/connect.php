<?php

$host = "localhost";
$user = "obm";
$pass = "Jsamcaorbt01*";
$db = "fxklu";

$connect = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

//echo "Connected MySQL successfully";



?>