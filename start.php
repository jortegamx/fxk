<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/head.php';
        require 'includes/connect.php';
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
                    <h1 class="h3 mb-2 text-gray-800">Inicio</h1>
                    <p class="mb-4">Bienvenid@ aqui encontrarás la lista de opciones habilitadas para tu usuario.</p>

                    <!-- DataTables Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aplicaciones</h6>
                        </div>
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Registro de Usuarios Beneficiarios</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="buregister.php" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Solicita el registro de Usuarios Beneficiarios para los clientes y revisa su proceso.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Registro de Ordenantes</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Registra Beneficiarios ordenantes para los clientes y recibe notifiaciones de PLD.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Registro de Transacciones</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Registra Beneficiarios ordenantes para los clientes y recibe notifiaciones de PLD.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Aprobación de Usuarios Beneficiarios</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="buapprove.php" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Solicita el registro de Usuarios Beneficiarios para los clientes y revisa su proceso.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Aprobación de Ordenantes</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Registra Beneficiarios ordenantes para los clientes y recibe notifiaciones de PLD.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Aprobación de Transacciones</h6>
                                        </div>
                                        <div class="card-body"> 
                                            <a href="#" class="btn btn-block btn-primary" >Ir</a>
                                            <br>
                                            <p class="mb-0 small">Registra Beneficiarios ordenantes para los clientes y recibe notifiaciones de PLD.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Consulta de Usuarios Beneficiarios</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="bulist.php" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Solicita el registro de Usuarios Beneficiarios para los clientes y revisa su proceso.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Consulta de Ordenantes</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Registra Beneficiarios ordenantes para los clientes y recibe notifiaciones de PLD.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Consulta de Transacciones</h6>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-primary">Ir</a>
                                            <br>
                                            <p class="mb-0 small">Registra Beneficiarios ordenantes para los clientes y recibe notifiaciones de PLD.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <!-- /.page content -->
                </div>
                
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <?php
            include 'includes/footer.php';
        ?>