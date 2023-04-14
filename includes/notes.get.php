<?php
session_start();
require '../includes/connect.php';

$customer = $_GET['customer'];

// Retrieve messages from database
$sql = "SELECT * FROM usernotes where custid = '$customer' and notecontent > '' ORDER BY cdate ASC";
$result = mysqli_query($connect, $sql);


$messages = array();
while ($row = mysqli_fetch_assoc($result)) {

	$today = date("d-M-Y");
	$storeddate = date("d-M-Y",strtotime($row['cdate']));
	
	if($today == $storeddate)
	{
		$prettydate = date("g:i A",strtotime($row['cdate']));
	}else
	{
		$prettydate = date("d M, g:i A",strtotime($row['cdate']));
	}

	$messages[] = array(
		'username' => $row['username'],
		'notecontent' => $row['notecontent'],
		'cdate' => $prettydate,
		'initials' => substr($row['username'],0,2)
	);
}

// Return messages as JSON
echo json_encode($messages);

// Close database connection
mysqli_close($connect);
?>
