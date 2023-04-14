<?php
include('../functions/checksession.php');
require '../vendor/autoload.php';
require '../includes/connect.php';
include('../functions/basics.php');
include_once '../functions/user.activity.log.php';

$section = $_POST['section'];
$username = $_SESSION['username'];
$hash = $_POST["2fahash"];

if ($section=="enable"){ 

    $query = "UPDATE user 
    SET User2faEnabled = 1, 
    User2faHash = ?, 
    Udate = CURRENT_TIMESTAMP
    WHERE UserName = ?";

    $statement = mysqli_prepare($connect,$query);
    mysqli_stmt_bind_param($statement,'ss',$hash,$username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    
    registerRelevantActivity($_SESSION['username'], 'Habilitación de 2FA');
	$message ="2FA habilitado con éxito!";
	echo json_encode(array('type'=>'success','message'=>$message));
    session_unset();
    session_destroy();
}


if ($section=="disable"){ 

        $sql = "SELECT User2faHash from user where UserName= ?";
        $statement = mysqli_prepare($connect,$sql);
        mysqli_stmt_bind_param($statement,'s',$username);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $array = mysqli_fetch_assoc($result);
        $secret_key = $array['User2faHash'];

        $google2fa = new \PragmaRX\Google2FA\Google2FA();
        if ($google2fa->verifyKey($secret_key, $hash)) {

        $query = "UPDATE user 
        SET User2faEnabled = 0, 
        User2faHash = NULL, 
        Udate = CURRENT_TIMESTAMP
        WHERE UserName = ?";
    
        $statement = mysqli_prepare($connect,$query);
        mysqli_stmt_bind_param($statement,'s',$username);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    
        registerRelevantActivity($_SESSION['username'], 'Deshabilitación de 2FA');
        $message ="2FA deshabilitado con éxito!";
        echo json_encode(array('type'=>'success','message'=>$message));
        session_unset();
        session_destroy();

	} else {
        registerRelevantActivity($_SESSION['username'], 'Intento de deshabilitación de 2FA sin éxito');
        $message ="Error!";
        echo json_encode(array('type'=>'error','message'=>$message));
	}


}
?>