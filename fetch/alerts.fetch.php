<?php
include('../includes/connect.php');

$queryAlertsByUser = "SELECT * FROM useralerts where UserAlertOrderId = ? and UserAlertStatus = 0 order by Cdate desc";
$resultAlertsByUser = mysqli_prepare($connect, $queryAlertsByUser);
mysqli_stmt_bind_param($resultAlertsByUser, 's', $_SESSION['orderid']);
mysqli_stmt_execute($resultAlertsByUser);
$resultABU = mysqli_stmt_get_result($resultAlertsByUser);
$count_rows_ABU = mysqli_num_rows($resultABU);

$queryAlertsByUserTotal = "SELECT * FROM useralerts where UserAlertOrderId = ? order by Cdate desc";
$resultAlertsByUserTotal = mysqli_prepare($connect, $queryAlertsByUserTotal);
mysqli_stmt_bind_param($resultAlertsByUserTotal, 's', $_SESSION['orderid']);
mysqli_stmt_execute($resultAlertsByUserTotal);
$resultABUTotal = mysqli_stmt_get_result($resultAlertsByUserTotal);

?>