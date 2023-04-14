<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jacob Ortega">

    <title>Klu Atlas</title>

    <!-- Custom fonts for this template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="img/logo-azul.svg" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/svg+xml" href="img/logo.svg" media="(prefers-color-scheme: dark)">
</head>
<body>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido de vuelta!</h1>
                                    </div>
                                    <form class="user" action="ajax/login.ajax.php" method="post" autocomplete="off">
                                        <div class="form-group">
                                        <div class="alert"><center>
                                            <?php 
                                            if($_GET['error']=='invalid') {
                                            echo "Datos incorrectos";
                                            }
                                            if ($_GET['error']=='session'){
                                                echo "Tu sesión finalizó por inactividad";
                                            }; 
                                            ?>
                                            
                                        </center></div>
                                            <input type="text" class="form-control form-control-user"
                                                id="user" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu usuario..." name="user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="passwd" placeholder="Contraseña" name="passwd">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Ingresar</button>
                                        
                                    </form>
                                    <br>
                                    <p class="text-xs text-center"><a href="recover.php">Olvidé mi contraseña</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>