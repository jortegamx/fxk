<?php
include('../includes/connect.php');

if (!empty($_POST['search'])) {


    $search = $_POST['search'];
    $Search_Query = mysqli_real_escape_string($connect, $search);


    $query = "SELECT * FROM user WHERE UserName LIKE '%".$Search_Query."%'; ";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

    
    $html ='<ul class="list-group" style="margin-top:-15px;">';

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $html .= "<li class='list-group-item'><a>" . $row['UserName'] . "</a></li>";
            
        }
        
    } else {
          $html .= '<li class="list-group-item">Sorry! No record found</li>';
    }

    $html .= "</ul>";
    echo $html;
} 

mysqli_close($connect);