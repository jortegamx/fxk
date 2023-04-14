<?php
session_start();
if (!$_SESSION['username']) {
	header("location: index.php");
}
if( isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60*20) ){
    session_unset();
    session_destroy();
    header('Location: index.php');
    }else{
    session_regenerate_id(true);
    $_SESSION['last_acted_on'] = time();
    }
?>