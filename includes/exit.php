<?php
include('../functions/basics.php');
session_start();
registerRelevantActivity($_SESSION['username'], 'Cierre de sesión en el sistema');
session_destroy();
header("location: ../");
exit();


?>