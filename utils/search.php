<?php
include('connect.php'); 
 
if ($connMSSQL) {
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $query = "SELECT * FROM usersmorales WHERE Email LIKE '%$search%' OR Razon_Social LIKE '%$search%' or RFC LIKE '%$search%'";
        $stmt = sqlsrv_query($connMSSQL, $query);
        echo '<form>';
        echo '<option value="">Selecciona</option>';
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo '<option value="' . $row['Id'] . '">' . $row['Razon_social'] . '</option>';
        }
    }
    echo '</form>';
    sqlsrv_close($conn);
}
?>