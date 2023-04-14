<!DOCTYPE html>
<html lang="en">

<head>

<?php
    include 'includes/head.php';
    require 'includes/connect.php';
    include('fetch/alerts.fetch.php');
    if (!$_SESSION['username']){
        header("location: index.php");
        exit();
    }
?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            include 'includes/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'includes/topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Mis Alertas</h1>
                    <p class="mb-4">Estas son la notificaciones que has recibido en los últimos 15 dias</a>.</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-10 col-lg-7">
                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Notificaciones</h6>
                                </div>
                                <div class="card-body">
                                  <table class="table table-bordered" width="100%" cellspacing="0">
                                  <thead>
                                            <th>Tipo</th>
                                            <th>Fecha</th>
                                            <th>Mensaje</th>
                                    </thead>
                                    <tbody>
      
                                  <?php 

                                        while($rowTotal = mysqli_fetch_assoc($resultABUTotal)) {

                                          $fmtdate = date("d F, Y H:m",strtotime($rowTotal['Cdate']));
                                          echo "<tr><td>";
                                          echo "<div class=' 
                                          bg-".$rowTotal['UserAlertType']."'>";
                                          if ($rowTotal['UserAlertType'] == 'warning'){
                                            echo '<i class="fas fa-exclamation-triangle text-white"></i>';}
                                          if ($rowTotal['UserAlertType'] == 'success'){
                                            echo '<i class="fas fa-thumbs-up text-white"></i>';}
                                          if ($rowTotal['UserAlertType'] == 'primary'){
                                            echo '<i class="fas fa-star text-white"></i></div></td>';}

                                          echo '<td><div class="small text-gray-500">'.$fmtdate.'</div></td><td>';
                                            if ($rowTotal['UserAlertStatus'] == 0) {
                                                echo '<span class="font-weight-bold">';
                                            }
                                            echo $rowTotal['UserAlertContent'];

                                            if ($rowTotal['UserAlertStatus'] == 0) {
                                                echo '</span">';
                                            }
                                            echo '</td></tr>';
                                        }
                                    

                                  ?>
                                    </tbody>
                                  </table>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php
$sqlUUA = "UPDATE useralerts SET UserAlertStatus = 1, Udate = CURRENT_TIMESTAMP where UserAlertStatus = 0 and UserAlertOrderId = ? ";
$resultUUA = mysqli_prepare($connect, $sqlUUA);
mysqli_stmt_bind_param($resultUUA, 's', $_SESSION['orderid']);
mysqli_stmt_execute($resultUUA);
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

            <!-- Footer -->
            <?php
            include 'includes/footer.php';
            ?>