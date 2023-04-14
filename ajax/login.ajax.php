<?php
session_start();
require '../vendor/autoload.php';
require '../includes/connect.php';
include('../functions/basics.php');

$user = $_POST['user'];
$passwdhash = hash('sha256', $_POST['passwd']);
$hash = $_POST['2fahash'];

if (isset($hash)){
        //Validate 2FA
        $sql = "SELECT User2faHash from user where UserName= ?";
        $statement = mysqli_prepare($connect,$sql);
        mysqli_stmt_bind_param($statement,'s',$_SESSION['username']);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $array = mysqli_fetch_assoc($result);
        $secret_key = $array['User2faHash'];

        $google2fa = new \PragmaRX\Google2FA\Google2FA();
        if ($google2fa->verifyKey($secret_key, $hash)) {
            registerRelevantActivity($_SESSION['username'], 'Ingreso al sistema con 2FA');
            header("location: ../dashboard.php");
        }else {
            registerRelevantActivity($_SESSION['username'], 'Error al intentar ingresar al sistema con 2FA');
            header("location: ../loginWith2FA.php?error=invalid");
        }

}else {

$sql = "SELECT count(*) as conteo, UserFullName, UserEmail, UserType, UserOrderId, UserRoleId, UserStagesAllowed, UserValidator, User2faEnabled, User2faHash from user where UserName= ? and UserDeactivated = 0 and UserPasswordHash = ?";
$statement = mysqli_prepare($connect,$sql);
mysqli_stmt_bind_param($statement,'ss',$user,$passwdhash);
mysqli_stmt_execute($statement);
$result = mysqli_stmt_get_result($statement);
$array = mysqli_fetch_assoc($result);

if ($array['conteo']>0){

    if ($array['User2faEnabled']==1){
        $_SESSION['username']  =        $user;
        $_SESSION['2faenabled'] =       1;
        $_SESSION['fullname'] =         $array['UserFullName'];
        $_SESSION['useremail'] =        $array['UserEmail'];
        $_SESSION['usertype'] =         $array['UserType'];
        $_SESSION['orderid'] =          $array['UserOrderId'];
        $_SESSION['userrole'] =         $array['UserRoleId'];
        $_SESSION['stagesallowed'] =    $array['UserStagesAllowed'];
        $_SESSION['validator'] =        $array['UserValidator'];
        $_SESSION['last_acted_on'] =    time();
        
        header("location: ../loginWith2FA.php");
    }
    else{
        $_SESSION['username'] = $user;
        $_SESSION['2faenabled'] = 0;
        $_SESSION['fullname'] = $array['UserFullName'];
        $_SESSION['last_acted_on'] =    time();
        registerRelevantActivity($_SESSION['username'], 'Ingreso al sistema sin 2FA');
        header("location: ../profile.php");
    }

}else{
    header("location: ../index.php?error=invalid");
}

}
?>
