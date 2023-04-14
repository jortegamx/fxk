<?php
session_start();
include('../includes/connect.php');

$username = $_SESSION['username'];

$output= array();
$sql = "SELECT * FROM user where UserName ='".$username."'";
$query = mysqli_query($connect,$sql);
$count_rows = mysqli_num_rows($query);

$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
    $sub_array[] = $row['UserId'];
    $sub_array[] = $row['UserName'];
    $sub_array[] = $row['UserFullName'];
	$sub_array[] = $row['UserPhoneNumber'];
	$sub_array[] = $row['UserEmail'];
	$sub_array[] = $row['Cdate'];
	$sub_array[] = $row['UserType'];
	$sub_array[] = $row['UserOrderId'];
	$sub_array[] = $row['UserRoleId'];
	$sub_array[] = $row['UserStagesAllowed'];
	$data[] = $sub_array;
}

?>