<?php 
include('fetch/alerts.fetch.php'); 

if ($count_rows_ABU > 3){
    $badge = "3+";
}else{
    $badge = $count_rows_ABU;
}
?>
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php 
if ($badge > 0){
            echo '<i class="fas fa-bell fa-fw fa-shake"></i>';
            echo '<span class="badge badge-danger badge-counter">' . $badge . '</span>';
}else{
    echo '<i class="fas fa-bell fa-fw"></i>';
}
?>
    </a>
    <!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
            Centro de Notificaciones
        </h6>
        
<?php 
while($row = mysqli_fetch_assoc($resultABU)) {

    date_default_timezone_set('America/Mexico_City');
	setlocale(LC_TIME, 'mx_ES');
	$fmtdate = date("d F, Y H:i",strtotime($row['Cdate']));

   echo '<a class="dropdown-item d-flex align-items-center" href="#">';
   echo '<div class="mr-3">';
   echo "<div class='icon-circle bg-".$row['UserAlertType']."'>";
   if ($row['UserAlertType'] == 'warning'){
    echo '<i class="fas fa-exclamation-triangle text-white"></i>';}
   if ($row['UserAlertType'] == 'success'){
    echo '<i class="fas fa-thumbs-up text-white"></i>';}
   if ($row['UserAlertType'] == 'primary'){
    echo '<i class="fas fa-star text-white"></i>';}
   echo '</div></div><div><div class="small text-gray-500">'.$fmtdate.'</div>';
    if ($row['UserAlertStatus'] == 0) {
        echo '<span class="font-weight-bold">';
    }
    echo $row['UserAlertContent'];
    if ($row['UserAlertStatus'] == 0) {
        echo '</span">';
    }
    echo '</div></a>';
    if($i == 2) break;
    $i++;

}

if ($badge == 0){
    echo '<a class="dropdown-item d-flex align-items-center" href="#"><div class="mr-3">No hay notificaciones</div></a>';
}
?>

<a class="dropdown-item text-center small text-gray-500" href="myalerts.php">Mostrar todas las alertas</a>
    </div>
</li>
