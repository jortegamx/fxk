<?php
include('../includes/connectMS.php');
if (!empty($_POST['search'])) {

    $searched = $_POST['search'];
    $pattern = "/^.*\(([^)]+)\).*$/";
    $search = preg_replace($pattern, "$1", $searched);
    $search = trim($search);

    $query = "SELECT * FROM usersmorales WHERE Clabe = '$search'";
    $stmt = sqlsrv_query($connMSSQL, $query);
    $html = "";

    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $html .= '<div class="card position-relative"><div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Verifica los datos del cliente</h6></div><div class="card-body">';
        $html .= '<div class="form-floating"> <form class="form-floating" method="POST" action="buregister.php">';
        $html .= '<input type="hidden" name="uuid" id="uuid" value="'.$row['Id'].'">';
        $html .= '<input type="hidden" name="raz" id="raz" value="'.$row['Razon_social'].'">';
        $html .= '<div class="form-group"><label for="user">Razon Social</label>';
        $html .= '<input type="text" class="form-control form-control-user" id="razsoc" name="razsoc" width="100%" value="' . $row['Razon_social'] . '" disabled></div>';
        $html .= '<div class="form-group"><label for="username">RFC</label>';
        $html .= '<input type="text" class="form-control form-control-user" id="rfc" name="rfc" width="100%" value="' . $row['Rfc'] . '" disabled></div>';
        $html .= '<div class="form-group"><label for="email">Representante</label>';
        $html .= '<input type="text" class="form-control form-control-user" id="repleg" name="repleg" width="100%" value="' . $row['Representante'] . '" disabled></div>';
        $html .= '<div class="form-group"><label for="email">CLABE</label>';
        $html .= '<input type="text" class="form-control form-control-user" id= "clabe" name="clabe" width="100%" value="' . $row['Clabe'] . '" disabled></div>';
        $html .= '<button type="submit" id="submit" class="btn btn-primary">Continuar</button>';
        $html .= '</form> </div></div></div>';

    }

    echo $html;
}

sqlsrv_close($connMSSQL);