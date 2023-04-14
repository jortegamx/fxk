<!DOCTYPE html>
<html lang="en">
<head> 
    <?php
        include 'includes/head.php';
        include_once 'functions/user.activity.log.php';
        require 'includes/connect.php';
        include 'fetch/detail.fetch.php';
        $BuId = $sub_arrayFx[0];
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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800" id="CustDetailName">Detalle del U.B.: <?php echo $sub_arrayFx[2]; ?></h1>
                        <?php
                        if ($_SESSION['usertype'] == 'PL') {
                            if ($sub_arrayFx[12] ==0) {
                                echo '
                        <a href="#" data-toggle="modal" data-target="#ApproveBU" class="d-none d-sm-inline-block btn btn-sm btn-success">
                        <i class="fas fa-check fa-sm text-white-80"></i> Aprobar </a>
                        <a href="#" data-toggle="modal" data-target="#RejectBU" class="d-none d-sm-inline-block btn btn-sm btn-warning">
                        <i class="fas fa-xmark fa-sm text-white-80"></i> Rechazar </a>';
                            }
                        }
                        ?>
                </div>

                    <!-- Content -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fecha y hora de solicitud: <? echo $sub_arrayFx[13]; ?></h6>
                        </div>
                        <div class="card-body">
 
                            <!-- Tab de datos generales -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card position-relative">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Datos del cliente </h6>
                                            </div>
                                            <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control form-control-user" width='100%' id="kcname" name="kcname" disabled value="<? echo $sub_arrayKlu[1]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dirección</label>
                                                        <input type="text" class="form-control form-control-user" width='100%' id="kcaddress" name="kcaddress" disabled value="<? echo $sub_arrayKlu[2]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Representante Legal</label>
                                                        <input type="text" class="form-control form-control-user" id="kcreplegal" name="kcreplegal" disabled value="<? echo $sub_arrayKlu[3]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Cuenta</label>
                                                        <input type="text" class="form-control form-control-user" id="kcclabe" name="kcclabe" disabled value="<? echo $sub_arrayKlu[4]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>RFC</label>
                                                        <input type="text" class="form-control form-control-user" id="kctaxid" name="kctaxid"  disabled value="<? echo $sub_arrayKlu[5]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Correo Electrónico</label>
                                                        <input type="email" class="form-control form-control-user" id="kcemail" name="kcemail"  disabled value="<? echo $sub_arrayKlu[6]; ?>">
                                                    </div>
                                               </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card position-relative">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Datos del beneficiario </h6>
                                            </div>
                                            <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control form-control-user" width='100%' id="buname" name="buname" disabled value="<? echo $sub_arrayFx[3]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dirección</label>
                                                        <input type="text" class="form-control form-control-user" width='100%' id="buaddress" name="buaddress" disabled value="<? echo $sub_arrayFx[4]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Banco</label>
                                                        <input type="text" class="form-control form-control-user" id="bubank" name="bubank" disabled value="<? echo $sub_arrayFx[6]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dirección del banco</label>
                                                        <input type="text" class="form-control form-control-user" id="bubankaddress" name="bubankaddress" disabled value="<? echo $sub_arrayFx[7]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>País</label>
                                                        <input type="text" class="form-control form-control-user" id="bubankcountry" name="bubankcountry"  disabled value="<? echo $sub_arrayFx[8]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Cuenta y Swift</label>
                                                        <input type="text" class="form-control form-control-user" id="buaccount" name="buaccount"  disabled value="<? echo $sub_arrayFx[9]." - ".$sub_arrayFx[10]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>FFC</label>
                                                        <input type="text" class="form-control form-control-user" id="buffc" name="buffc"  disabled value="<? echo $sub_arrayFx[11]; ?>">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card position-relative">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Datos del banco intermediario </h6>
                                            </div>
                                            <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Banco Intermediario</label>
                                                        <input type="text" class="form-control form-control-user" width='100%' disabled value="<? echo $sub_arrayFx[15]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dirección Banco Intermediario</label>
                                                        <input type="text" class="form-control form-control-user" width='100%' disabled value="<? echo $sub_arrayFx[16]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>País del Banco Intermediario</label>
                                                        <input type="text" class="form-control form-control-user" disabled value="<? echo $sub_arrayFx[17]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Cuenta Banco Intermediario</label>
                                                        <input type="text" class="form-control form-control-user" disabled value="<? echo $sub_arrayFx[18]; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>SWIFT Banco Intermediario</label>
                                                        <input type="text" class="form-control form-control-user" disabled value="<? echo $sub_arrayFx[19]; ?>">
                                                    </div>
                                               </div>
                                        </div>
                                    </div>
                                </div>




            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <?php
            include 'includes/footer.php';
        ?>