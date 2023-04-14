<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/head.php';
        include 'includes/connect.php';
        $uuid = $_POST['uuid'];
        if (isset($_POST['raz'])){
        $razsoc = "para ".$_POST['raz'];
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
                    <h1 class="h3 mb-2 text-gray-800">Usuarios Beneficiarios</h1>
                    <p class="mb-4">Listado de usuarios beneficiarios.</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Listado de usuarios beneficiarios</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="budata" width="100%" cellspacing="0">
                                    <thead>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Banco</th>
                                            <th>País del Banco</th>
                                            <th>Cuenta</th>
                                            <th>Estatus</th>
                                            <th>Cdate</th>
                                    </thead>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>


                <!-- /.page content -->
                </div>
                
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Specific Scripts -->
            <script src="https://maps.google.com/maps/api/js?key=AIzaSyDDb5TMkxni5YHt_49ZVQRvO46NRva0O0o&libraries=places&callback=Function.prototype" type="text/javascript"></script>
            <script src="js/googleaddress.js" type="text/javascript"></script>

            <?php
            include 'includes/footer.php';
        ?>