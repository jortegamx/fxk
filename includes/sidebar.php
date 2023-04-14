<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
    <div class="sidebar-brand-icon">
        <img src="img/logo-white.svg">
    </div>
</a>


<hr class="sidebar-divider d-none d-md-block">
<div class="sidebar-heading">
    Principal
</div>

<li class="nav-item">
    <a class="nav-link" href="dashboard.php">
        <i class="fa-solid fa-gauge"></i>
        <span>Panel</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<div class="sidebar-heading">
    Mis aplicaciones
</div>

<!-- Nav Item - UB Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBU"
        aria-expanded="true" aria-controls="collapseBU">
        <i class="fa-solid fa-person-arrow-up-from-line"></i>
        <span>Usuarios Beneficiarios</span>
    </a>
    <div id="collapseBU" class="collapse" aria-labelledby="headingBUs"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ops. disponibles:</h6>


            <?php 
            $typesAdd = array('FX','AD');
            if  (in_array($_SESSION['usertype'], $typesAdd)){
                echo '<a class="collapse-item" href="buregister.php">Registrar</a>';
            }
            $typesApprove = array('PL','AD');
            if  (in_array($_SESSION['usertype'], $typesApprove)){
                echo '<a class="collapse-item" href="buapprove.php">Aprobar</a>';
            }
            $typesList = array('PL','AD','FX');
            if  (in_array($_SESSION['usertype'], $typesList)){
                echo '<a class="collapse-item" href="bulist.php">Consultar</a>';
            }

            ?>
        </div>
    </div>
</li>

<!-- Nav Item - UO Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOU"
        aria-expanded="true" aria-controls="collapseOU">
        <i class="fa-solid fa-person-arrow-down-to-line"></i>
        <span>Usuarios Ordenantes</span>
    </a>
    <div id="collapseOU" class="collapse" aria-labelledby="headingOU"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ops. disponibles:</h6>


            <?php 
            $typesAdd = array('FX','AD');
            if  (in_array($_SESSION['usertype'], $typesAdd)){
                echo '<a class="collapse-item" href="ouregister.php">Registrar</a>';
            }
            $typesApprove = array('PL','AD');
            if  (in_array($_SESSION['usertype'], $typesApprove)){
                echo '<a class="collapse-item" href="ouapprove.php">Aprobar</a>';
            }
            $typesList = array('PL','AD','FX');
            if  (in_array($_SESSION['usertype'], $typesList)){
                echo '<a class="collapse-item" href="oulist.php">Consultar</a>';
            }

            ?>
        </div>
    </div>
</li>

<!-- Nav Item - TX Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTX"
        aria-expanded="true" aria-controls="collapseTX">
        <i class="fa-solid fa-people-arrows"></i>
        <span>Transacciones</span>
    </a>
    <div id="collapseTX" class="collapse" aria-labelledby="headingTX"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ops. disponibles:</h6>


            <?php 
            $typesAdd = array('FX','AD');
            if  (in_array($_SESSION['usertype'], $typesAdd)){
                echo '<a class="collapse-item" href="txregister.php">Registrar</a>';
            }
            $typesApprove = array('PL','AD');
            if  (in_array($_SESSION['usertype'], $typesApprove)){
                echo '<a class="collapse-item" href="txapprove.php">Aprobar</a>';
            }
            $typesList = array('PL','AD','FX');
            if  (in_array($_SESSION['usertype'], $typesList)){
                echo '<a class="collapse-item" href="txlist.php">Consultar</a>';
            }

            ?>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>