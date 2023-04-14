<?php
include 'includes/connectMS.php';
$BuId = $_POST['BuId'];
$CustCode = $_POST['CustCode'];


$queryKlu = "SELECT * FROM usersmorales WHERE Id = '$CustCode'";
$stmt = sqlsrv_query($connMSSQL, $queryKlu);
while ($rowKlu = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
	$sub_arrayKlu = array();
	$sub_arrayKlu[] = $rowKlu['Id'];				// Field 0
	$sub_arrayKlu[] = $rowKlu['Razon_social'];		// Field 1
	$sub_arrayKlu[] = $rowKlu['Dir_empresa'];		// Field 2
	$sub_arrayKlu[] = $rowKlu['Representante'];		// Field 3
	$sub_arrayKlu[] = $rowKlu['Clabe'];				// Field 4
	$sub_arrayKlu[] = $rowKlu['Rfc'];				// Field 5
	$sub_arrayKlu[] = $rowKlu['Email'];				// Field 6
}

sqlsrv_close($connMSSQL);

include 'includes/connect.php';
$queryFx = "SELECT * FROM busers where BuId = $BuId ";
$resultFX = mysqli_query($connect,$queryFx);
$dataFX = array();
while($rowFx = mysqli_fetch_assoc($resultFX))
{
	$sub_arrayFx = array();
    $sub_arrayFx[] = $rowFx['BuId'];				// Field 0
    $sub_arrayFx[] = $rowFx['CustCode'];			// Field 1
	$sub_arrayFx[] = $rowFx['BuCode'];				// Field 2
	$sub_arrayFx[] = $rowFx['BuName'];				// Field 3
	$sub_arrayFx[] = $rowFx['BuAddress'];			// Field 4
	$sub_arrayFx[] = $rowFx['BuCountry'];			// Field 5
	$sub_arrayFx[] = $rowFx['BuBankName'];			// Field 6
	$sub_arrayFx[] = $rowFx['BuBankAddress'];		// Field 7
	$sub_arrayFx[] = $rowFx['BuBankCountry'];		// Field 8
	$sub_arrayFx[] = $rowFx['BuIBAN'];				// Field 9
    $sub_arrayFx[] = $rowFx['BuSwift'];				// Field 10
    $sub_arrayFx[] = $rowFx['BuFFC'];				// Field 11
    $sub_arrayFx[] = $rowFx['BuStatus'];			// Field 12
    $sub_arrayFx[] = $rowFx['Cdate'];				// Field 13
	$sub_arrayFx[] = $rowFx['Udate'];				// Field 14
	$sub_arrayFx[] = $rowFx['IntBankName'];			// Field 15
	$sub_arrayFx[] = $rowFx['IntBankAddress'];		// Field 16
	$sub_arrayFx[] = $rowFx['IntBankCountry'];		// Field 17
	$sub_arrayFx[] = $rowFx['IntBankIBAN'];			// Field 18
    $sub_arrayFx[] = $rowFx['IntBankSWIFT'];		// Field 19
    

	$dataFX[] = $sub_arrayFx;

}
?>