<?php
include('../functions/checksession.php');
require('../includes/connect.php');
include('../functions/basics.php');

$section = $_POST['section'];
$usertype = $_SESSION['usertype'];


if ($section=="BUDATA"){

    $CustCode = $_POST["uuid"];
    $BuCode = "BU".time();
    $BuName = $_POST["legalname"];
    $BuAddress = $_POST["buaddress"];
    $BuParts = explode(",", $BuAddress);
    $BuCountry = trim(end($BuParts));
    $BuFFC = $_POST['buffc'];


    $BuBankName = $_POST["bank"];
    $BuBankAddress = $_POST["bankaddress"];
    $BuBankParts = explode(",", $BuBankAddress);
    $BuBankCountry = trim(end($BuBankParts));
    $BuIBAN = $_POST["buaccount"]; 
    $BuSwift = $_POST["bankswift"]; 

    $IntBankName = $_POST["intbank"];
    $IntBankAddress = $_POST["intbankaddress"];
    $IntBankParts = explode(",", $IntBankAddress);
    $IntBankCountry = trim(end($IntBankParts));
    $IntBankSWIFT = $_POST["intbankswift"];
    $IntBankIBAN = $_POST["intbuaccount"];

    $BuStatus = 0;
    
    $query = "INSERT INTO busers (CustCode,BuCode,BuName,BuAddress,BuCountry,BuBankName,BuBankAddress,BuBankCountry,BuIBAN,BuSwift,BuFFC,IntBankName,IntBankAddress,IntBankCountry,IntBankSWIFT,IntBankIBAN,BuStatus)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $statement = mysqli_prepare($connect,$query);
    mysqli_stmt_bind_param($statement,'ssssssssssssssssi',$CustCode,$BuCode,$BuName,$BuAddress,$BuCountry,$BuBankName,$BuBankAddress,$BuBankCountry,$BuIBAN,$BuSwift,$BuFFC,$IntBankName,$IntBankAddress,$IntBankCountry,$IntBankSWIFT,$IntBankIBAN,$BuStatus);

    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    mysqli_stmt_close($statement);

    $mensaje = "Actualizado con éxito!";
    echo json_encode(array('success'=>$mensaje));
}

?>