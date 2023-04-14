<?php
include('../includes/connect.php');
if (!empty($_POST['search'])) {

    $search = $_POST['search'];
    $Search_Query = mysqli_real_escape_string($connect, $search);

    $query = "SELECT * FROM user
    WHERE UserName like '%".$Search_Query."%'; ";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

    $html = "";

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $html .= '<div class="card position-relative"><div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Datos del cliente</h6></div><div class="card-body">';
            $html .= '<div class="form-floating"> <form class="form-floating">';
            $html .= '<div class="form-group"><label for="user">Usuario</label>';
            $html .= '<input type="text" class="form-control form-control-user" id= "user" width="100%" value="' . $row['UserName'] . '" disabled></div>';
            $html .= '<div class="form-group"><label for="username">Nombre</label>';
            $html .= '<input type="text" class="form-control form-control-user" id= "username" width="100%" value="' . $row['UserFullName'] . '" disabled></div>';
            $html .= '<div class="form-group"><label for="email">Correo</label>';
            $html .= '<input type="text" class="form-control form-control-user" id= "email" width="100%" value="' . $row['UserEmail'] . '" disabled></div>';
            $html .= '<button type="submit" id="submit" class="btn btn-primary">Continuar</button>';
            $html .= '</form> </div></div></div>';

        }
    } else {
        $html .= "Sorry! No record found";
    }


    echo $html;
}

mysqli_close($connect);