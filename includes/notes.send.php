<?php
session_start();
require '../includes/connect.php';

// Get name and message from POST data
$custid = $_POST['custid'];
$username = $_POST['username'];
$notecontent = $_POST['notecontent'];

if ($notecontent < " "){

	echo "Null value";

}else{
// Insert message into database
$sql = "INSERT INTO usernotes (custid, username, notecontent) VALUES ('$custid', '$username', '$notecontent')";

if (mysqli_query($connect, $sql)) {
	echo "Success";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

// Close database connection
mysqli_close($connect);
}
?>
