<?php
session_start();
include 'includes/connect.php';
// Get current page URL 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];
$userId = $_SESSION['fullname'];

// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR'];
$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/';
$user_agent = $_SERVER['HTTP_USER_AGENT'];
 
// Insert visitor activity log into database 

$sql = "INSERT INTO useractivitylogs (user, user_ip_address, user_agent, page_url, referrer_url, Cdate) 
VALUES (?,?,?,?,?,NOW())";

$statement = mysqli_prepare($connect,$sql);
mysqli_stmt_bind_param($statement,'sssss',$userId,$user_ip_address,$user_agent,$user_current_url,$referrer_url);
mysqli_stmt_execute($statement);
mysqli_stmt_close($statement);
 
?>