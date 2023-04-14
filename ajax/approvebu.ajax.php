<?php 
include('../functions/checksession.php');
include('../includes/connect.php');
include('../includes/connectMS.php');
include('../functions/basics.php');


$BuId = $_GET['BuId'];
$UserId = $_SESSION['username'];

/* Update BU Status */
$sql = "UPDATE busers SET BuStatus = 1, Udate = CURRENT_TIMESTAMP where BuId = ?";
$statement = mysqli_prepare($connect,$sql);
mysqli_stmt_bind_param($statement,'i',$BuId);
mysqli_stmt_execute($statement);
mysqli_stmt_close($statement);

registerRelevantActivity($UserId, 'Aprueba usuario beneficiario BuId '.$BuId);
toastr["success"](data.success, "Klu");

/* Prepare data */
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
    $sub_arrayFx[] = $rowFx['BuReference'];			// Field 11
    $sub_arrayFx[] = $rowFx['BuStatus'];			// Field 12
    $sub_arrayFx[] = $rowFx['Cdate'];				// Field 13
	$sub_arrayFx[] = $rowFx['Udate'];				// Field 14
	$dataFX[] = $sub_arrayFx;

}




    $alias = $sub_arrayFx[3]." - ".$sub_arrayFx[6]." - ".substr(trim($sub_arrayFx[9]), -4);

    $sql = "INSERT INTO KluTransfer VALUES (?,?,2,'BWN-10132586',getdate(),0,0)";
    $params = array($sub_arrayFx[1],$alias);
    $stmt = sqlsrv_query($connMSSQL, $sql, $params);

    if($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }else {
        registerRelevantActivity($UserId, 'Crea contacto de usuario beneficiario BuId '.$BuId);
    }

    sqlsrv_free_stmt($stmt);


    $queryUpdate = "INSERT INTO Contacts 
    select kt.UserId,1 as tipo,kt.Tipo,kt.Alias,63 as bankid,kt.Contacto as reference,
    isnull (IIF(au.Persona = 'Fisica',concat(bi.FirstName,' ',bi.LastName,' ',bi.SecondLastName),um.Razon_social),' ') as beneficiari,
    null as email,null as phonenumber,kt.CreationDate,kt.CreationDate,kt.IsDeleted from KluTransfer kt
    left join AspNetUsers au on (au.Email =kt.contacto and kt.Tipo=1) or (au.UserReference=kt.Contacto and kt.Tipo=2)
    left join UsersMorales um on um.id=au.Id
    left join BasicInformation bi on bi.Id=au.id
    where kt.Migrate =0
    order by kt.id asc";
    $stmt = sqlsrv_query($connMSSQL, $queryUpdate);
    if($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }else {
        registerRelevantActivity($UserId, 'Migra contacto de usuario beneficiario BuId '.$BuId);
    }
    sqlsrv_free_stmt($stmt);


    $queryMigrate = "UPDATE KluTransfer set Migrate=1 where Migrate=0";
    $stmt = sqlsrv_query($connMSSQL, $queryMigrate);
    if($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }else {
        registerRelevantActivity($UserId, 'Actualiza contacto de usuario beneficiario BuId '.$BuId);
    }
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($connMSSQL);



header("location: ../bulist.php");
?>
