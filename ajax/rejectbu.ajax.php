<?php
include('../functions/checksession.php');
include('../includes/connect.php');
include('../functions/basics.php');

$BuId = $_GET['BuId'];
$UserId = $_SESSION['username'];

$sql = "UPDATE busers SET BuStatus = -1, Udate = CURRENT_TIMESTAMP where BuId = ?";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "i", $BuId);
mysqli_stmt_execute($stmt);

registerRelevantActivity($UserId, 'Rechaza Usuario Beneficiario BuId '.$BuId);

header("location: ../bulist.php", true);

?>