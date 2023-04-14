<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/head.php';
        require 'includes/connect.php';
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
                    <p class="mb-4">Bienvenid@. Registra los usuarios beneficiarios de los clientes.</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registro de usuario beneficiario <? echo $razsoc; ?> </h6>
                            <p class="mb-0 small">Nota: Los campos marcados con * son requeridos.</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <!-- Check if UUID has been set -->
                              <? if (!isset($uuid)){ ?>
                                <div class="col-lg-6">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Busca Cliente Klu</h6>
                                        </div>
                                        <div class="card-body">
                                        <form>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control small" id="search" name="search" placeholder="Busca Cliente" autocomplete="off">
                                            <div class="input-group-append">
                                            <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </div>    
                                            </div>
                                        </form>
                                        <div id="list"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div id="card"> </div>
                                </div> 
                                <!-- If UUID hasn't been set -->
                                <? }else {?>

                                <div class="col-lg-12">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Datos del Usuario Beneficiario</h6>
                                        </div>
                                        <div class="card-body">    
                                            <form method="post" id="bu_register" autocomplete="off">
                                                <input type="hidden" id="uuid" name="uuid" value="<?php echo $uuid; ?>">
                                                <input type="hidden" id="section" name="section" value="BUDATA">
                                                
                                                <div class="form-group">
                                                    <label>Nombre Completo *</label>
                                                    <input type="text" class="form-control form-control-user" width='100%' id="legalname" name="legalname" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Domicilio Completo</label>
                                                    <input type="text" class="form-control form-control-user" width='100%' id="buaddress" name="buaddress">
                                                </div>
                                                <div class="form-group">
                                                    <label>FFC</label>
                                                    <input type="text" class="form-control form-control-user" width='100%' id="buffc" name="buffc">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <br>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Datos bancarios del Usuario Beneficiario</h6>
                                        </div>
                                        <div class="card-body">    
                                            <div class="form-group">
                                                <label>Banco *</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="bank" name="bank" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Dirección del Banco *</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="bankaddress" name="bankaddress" required >
                                            </div>

                                            <div class="form-group">
                                                <label>Swift / ABA / ACH *</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="bankswift" name="bankswift" required >
                                            </div>

                                            <div class="form-group">
                                                <label>Cuenta / IBAN *</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="buaccount" name="buaccount" required >
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="card position-relative">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Banco Intermediario (Si aplica)</h6>
                                        </div>
                                        <div class="card-body">    
                                            <div class="form-group">
                                                <label>Banco intermediario</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="intbank" name="intbank">
                                            </div>
                                            <div class="form-group">
                                                <label>Dirección del Banco Intermediario</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="intbankaddress" name="intbankaddress">
                                            </div>

                                            <div class="form-group">
                                                <label>Swift / ABA / ACH Banco Intermediario</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="intbankswift" name="intbankswift">
                                            </div>

                                            <div class="form-group">
                                                <label>Cuenta / IBAN Banco Intermediario</label>
                                                <input type="text" class="form-control form-control-user" width='100%' id="intbuaccount" name="intbuaccount">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" name="buregister" id="buregister" class="btn btn-primary btn-user btn-block" value="Solicitar Aprobación" />
                                            </div>
                                        </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                                <!-- ELSE END -->
                                <? } ?>
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