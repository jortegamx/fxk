            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Klu Tech SAPI de CV IFPE 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Elige "Salir" si estás listo para cerrar la sesion.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="includes/exit.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- NextStage Modal-->
    <div class="modal fade" id="NextStage" tabindex="-1" role="dialog" aria-labelledby="NextStage"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="NextStage">Pasar a la siguiente etapa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Asegurate de haber guardado los cambios antes de pasar a la siguiente etapa.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="ajax/nextstage.ajax.php?custid=<?php echo $CustId;?>&stageid=<?php echo $sub_array[14]; ?>">Continuar</a>
                  
                  </div>
            </div>
        </div>
    </div>
    <!-- Reject Modal-->
    <div class="modal fade" id="RejectBU" tabindex="-1" role="dialog" aria-labelledby="RejectBU" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="RejectBU">Rechazar Cliente</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Estás seguro que quieres rechazar el Usuario Beneficiario?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="ajax/rejectbu.ajax.php?BuId=<?php echo $BuId;?>">Continuar</a>
                  
                  </div>
            </div>
        </div>
    </div>
    
    <!-- Approve Modal-->
    <div class="modal fade" id="ApproveBU" tabindex="-1" role="dialog" aria-labelledby="ApproveBU" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ApproveBU">Aprobar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Estás seguro que quieres aprobar el Usuario Beneficiario?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="ajax/approvebu.ajax.php?BuId=<?php echo $BuId;?>">Continuar</a>
                  
                  </div>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/jquery-3.6.3.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script type="text/javascript" src="js/datatables.js"></script>
    <script src="js/toastr.js"></script>

    <? include('footer.scripts.profile.php'); ?>
    <? include('footer.scripts.savedata.php'); ?>
    <? include('footer.scripts.datatable.php'); ?>
    <? include('footer.scripts.searchklucust.php'); ?>
    
</body>
</html>