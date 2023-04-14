<?php


$serverName = "bitrusdb.cutmxfdbedwl.us-east-1.rds.amazonaws.com";
$connectionInfo = array( "Database"=>"bitrus", "UID"=>"admin", "PWD"=>"d9zM4BL3ac57HDbX");
$connMSSQL = sqlsrv_connect( $serverName, $connectionInfo);
if( $connMSSQL === false ) {
     echo "No se pudo conectar al servidor SQL Server. Error: ";
     die( print_r( sqlsrv_errors(), true));
}
else{

//    echo "Connected MSSQL successfully";

}




?>
