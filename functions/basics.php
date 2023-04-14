<?php

error_reporting(E_USER_ERROR);
ini_set('display_errors', 1);

function addFinding($CustId,$CustCode,$Type,$Description,$Value) {
    require '../includes/connect.php';
    $sqlAddFinding = "INSERT into riskfindings (RFCustId,RFCustCode,RFType,RFDescription,RFValue)
    Values ($CustId,'$CustCode','$Type','$Description',$Value)";
    $result= mysqli_query($connect, $sqlAddFinding);        
    }

function alertUser($User,$Type,$Message) {
    require '../includes/connect.php';
    $sqlAddAlert = "INSERT INTO useralerts (UserAlertOrderId,UserAlertType,UserAlertContent,UserAlertStatus)
    Values ('$User','$Type','$Message',0)";
    $result= mysqli_query($connect, $sqlAddAlert);        
    }
        
function alertAssignedUser($CustId,$Unit,$Type,$Message){
    require '../includes/connect.php';

    switch($Unit) {
        case 'OB':
            $searchfield = 'CustOnboardingId';
            break;
        case 'CD':
            $searchfield = 'CustControlDeskId';
            break;
        case 'SA':
            $searchfield = 'CustSalespersonId';
            break;
        case 'PL':
            $searchfield = 'CustPldId';
            break;
        }

        $sqlAddAlert = "SELECT ".$searchfield." from customer where CustId = ?";
        $resultAAU = mysqli_prepare($connect, $sqlAddAlert);
        mysqli_stmt_bind_param($resultAAU, 'i', $CustId);
        mysqli_stmt_execute($resultAAU);
        $row = mysqli_fetch_array(mysqli_stmt_get_result($resultAAU), MYSQLI_ASSOC);
        $UserCode = $row[$searchfield];

    $sqlAddAlert2 = "INSERT INTO useralerts (UserAlertOrderId,UserAlertType,UserAlertContent,UserAlertStatus)
    Values ('$UserCode','$Type','$Message',0)";
    mysqli_query($connect, $sqlAddAlert2);        
    }

function registerRelevantActivity($User,$Activity) {
    require '../includes/connect.php';
    $sqlAddRelevantActivity = "INSERT INTO userrelevantlogs (UserId,UserAction)
    Values ('$User','$Activity')";
    $result= mysqli_query($connect, $sqlAddRelevantActivity);        
    }
?>