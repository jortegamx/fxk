<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'includes/head.php';
		require 'includes/connect.php';
		require 'vendor/autoload.php';
		include 'fetch/profile.fetch.php';
		use PragmaRX\Google2FA\Support\Constants;
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
					<h1 class="h3 mb-2 text-gray-800">Mi Perfil</h1>

					<!-- DataTables Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Mis datos</h6>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="card position-relative">
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Mis datos generales</h6>
										</div>
										<div class="card-body">

											<div class="form-group">
												<label>Usuario</label>
												<input type="text" class="form-control form-control-user" width='100%' id="username" name="username" disabled value="<?php echo $sub_array[1]; ?>">
											</div>
											<div class="form-group">
												<label>Nombre</label>
												<input type="text" class="form-control form-control-user" width='100%' id="fullname" name="fullname" disabled value="<?php echo $sub_array[2]; ?>">
											</div>

											<div class="form-group">
												<label>Teléfono</label>
												<input type="text" class="form-control form-control-user" id="phonenumber" name="phonenumber" disabled value="<?php echo $sub_array[3]; ?>">
											</div>

											<div class="form-group">
												<label>Correo</label>
												<input type="text" class="form-control form-control-user" id="useremail" name="useremail" disabled value="<?php echo $sub_array[4]; ?>">
											</div>

											<div class="form-group">
												<label>Fecha de Creación</label>
												<input type="text" class="form-control form-control-user" id="date" name="date" disabled value="<?php echo $sub_array[5]; ?>">
											</div>


										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card position-relative">
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Datos de la estructura
											</h6>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label>Área</label>
												<input type="text" class="form-control form-control-user" width='100%' id="unit" name="unit" disabled value="<?php echo $sub_array[6]; ?>">
											</div>

											<div class="form-group">
												<label>Order ID +  Rol</label>
												<input type="text" class="form-control form-control-user" id="levelIdRole" name="levelIdRole" disabled value="<?php echo $sub_array[7]; echo " - ".$sub_array[8]; ?>">
											</div>

											<div class="form-group">
												<label>Etapas permitidas</label>
												<input type="text" class="form-control form-control-user" id="stagesallowed" name="stagesallowed" disabled value="<?php echo $sub_array[9]; ?>">
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
											<h6 class="m-0 font-weight-bold text-primary">Cambiar Contraseña
											</h6>
										</div>
										<div class="card-body">
											<form method="post" id="update_password">
												<input type="hidden" id="section" name="section" value="pass">
												<input type="hidden" name="username" value="<?php echo $username; ?>">
												<div class="form-group">
													<label>Contraseña Actual</label>
													<input type="password" class="form-control form-control-user" width='100%' id="actualpass" name="actualpass">
												</div>

												<div class="form-group">
													<label>Nueva Contraseña</label>
													<input type="password" class="form-control form-control-user" id="newpass1" name="newpass1">
												</div>

												<div class="form-group">
													<label>Repetir Nueva Contraseña</label>
													<input type="password" class="form-control form-control-user" id="newpass2" name="newpass2">
												</div>
												<div class="form-group">
													<input type="submit" name="updatepass" id="updatepass" class="btn btn-primary btn-user btn-block"
													value="Cambiar Contraseña" />
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card position-relative">
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Administrar 2FA</h6>
										</div>
										<div class="card-body">
											<?
											if ($_SESSION['2faenabled'] == 0)
											{
											$google2fa = new \PragmaRX\Google2FA\Google2FA();
											$google2fa->setAlgorithm(Constants::SHA512);
											$secret_key = $google2fa->generateSecretKey();
  
											$text = $google2fa->getQRCodeUrl(
											 'KLUSTER',
											 $_SESSION['username'],
											 $secret_key
											);
											
											$image_url = 'https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl='.$text;
											echo '<label>Habilitar 2FA (obligatorio)</label>';
											echo '<p class="small caption">Escanea el código con la app <b>Google Authenticator</b> y <b>posteriormente haz click</b> en el botón de Habilitar 2FA</p><br>';
											echo '<center><img src="'.$image_url.'" /><center><br>';
											
											
											echo '
												<form method="post" id="enable_2fa">
												<input type="hidden" id="2fahash" name="2fahash" value="'.$secret_key.'">
												<input type="hidden" name="section" value="enable">
												<div class="form-group">
													<input type="submit" name="enable2fa" id="enable2fa" class="btn btn-primary btn-user btn-block"
													value="Habilitar" />
												</div>
												</form>';
											}else {
												echo '
												<form method="post" id="disable_2fa" autocomplete="off">
												<input type="hidden" name="section" value="disable">
												<div class="form-group">
													<label>Deshabilitar 2FA</label>
													<input type="text" class="form-control form-control-user" id="2fahash" placeholder ="Ingresa el código" name="2fahash">
												</div>
												<div class="form-group">
													<input type="submit" name="disable2fa" id="disable2fa" class="btn btn-primary btn-user btn-block"
													value="Deshabilitar" />
												</div>
												</form>';
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->
	</div> 

	<?php
		include 'includes/footer.php';
	?>