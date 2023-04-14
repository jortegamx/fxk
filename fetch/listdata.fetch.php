<?php
include('../functions/checksession.php');
include('../includes/connect.php');

$orderid = $_SESSION['orderid'];
$stagesallowed = explode(",",$_SESSION['stagesallowed']);
$usertype = $_SESSION['usertype'];

$output= array();
$sql = "SELECT * FROM busers";
$totalQuery = mysqli_query($connect,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'BuCode',
	1 => 'BuName',
	2 => 'BuBankName',
	3 => 'BuBankCountry',
	4 => 'BuIBAN',
	5 => 'BuStatus',
	6 => 'Cdate',
	
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE BuName like '%".$search_value."%' OR BuCode like '%".$search_value."%' OR BuBankName like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY CustCode desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($connect,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = "<form action='budetail.php' method='post'><input type='hidden' id='BuId' name='BuId' value='".$row['BuId']."'><input type='hidden' id='CustCode' name='CustCode' value='".$row['CustCode']."'>
	<button type='submit' class='btn-linked'>".$row['BuCode']."</button></form>";
	$sub_array[] = $row['BuName'];
	$sub_array[] = $row['BuBankName'];
	$sub_array[] = $row['BuBankCountry'];
	$sub_array[] = $row['BuIBAN'];
	$sub_array[] = $row['BuStatus'];
	$sub_array[] = $row['Cdate'];

	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>$total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);