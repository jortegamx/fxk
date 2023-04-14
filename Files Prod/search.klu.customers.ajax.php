<?php
include('../includes/connectMS.php');

if (!empty($_POST['search'])) {


    $search = $_POST['search'];
    $query = "SELECT TOP 8 * FROM usersmorales WHERE (Email LIKE '%$search%' OR Razon_Social LIKE '%$search%' or RFC LIKE '%$search%') AND DATALENGTH(Clabe) > 0";
    $stmt = sqlsrv_query($connMSSQL, $query);

    $html ='<ul class="list-group" style="margin-top:-15px;">';

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

            $html .= "<li class='list-group-item'><a>" . $row['Razon_social'] . " (". $row['Clabe'] .")</a></li>";
        }

    $html .= "</ul>";
    echo $html;
}

sqlsrv_close($connMSSQL);
