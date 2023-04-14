<?php
include('includes/connect.php');
require_once ('vendor/autoload.php');
use \Firebase\JWT\JWT;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jacob Ortega">

    <title>Klu OBPM :: Recuperar contraseña</title>

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
    <!-- The video -->
<video autoplay muted loop id="myVideo" style="  backdrop-filter: blur(5px);">
  <source src="img/video.mp4" type="video/mp4">
</video>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row recover">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Recuperar contraseña</h1>
                                    </div>
                                    <form class="user" action="recover.php" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <?php if ($_POST['stage']=='step1')
                                                { 
                                                    $sql = "SELECT count(*) as conteo from user where UserName= ? and UserDeactivated = 0";
                                                    $statement = mysqli_prepare($connect,$sql);
                                                    mysqli_stmt_bind_param($statement,'s',$_POST['user']);
                                                    mysqli_stmt_execute($statement);
                                                    $result = mysqli_stmt_get_result($statement);
                                                    $array = mysqli_fetch_assoc($result);

                                                    if ($array['conteo']<1){
                                                        
                                                    echo '<div class="alert"><center>No se encontró el usuario</center></div>';
                                                    echo '<input type="text" class="form-control form-control-user" id="user" required placeholder="Ingresa tu usuario..." name="user">
                                                          <input type="hidden" id="stage" name="stage" value="step1">';
                                                    echo '</div><button type="submit" class="btn btn-primary btn-user btn-block">Siguiente</button>';
                                                    }else {
                                                    
                                                    echo '<div class="alert"><center>&nbsp;</center></div>';
                                                    echo '<input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" required placeholder="Ingresa tu correo..." maxlength="90" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">';
                                                    echo '<input type="hidden" id="stage" name="stage" value="step2">';
                                                    echo '<input type="hidden" id="user" name="user" value="'.htmlspecialchars($_POST['user'], ENT_QUOTES).'">';
                                                    echo '</div><button type="submit" class="btn btn-primary btn-user btn-block">Siguiente</button>';
                                                    }
                                                }
                                                else { 
                                                    if     ($_POST['stage']=='step2')
                                                        {
                                                            $sql = "SELECT count(*) as conteo from user where UserName= ? and UserEmail = ? and UserDeactivated = 0";
                                                            $statement = mysqli_prepare($connect,$sql);
                                                            mysqli_stmt_bind_param($statement,'ss',$_POST['user'],$_POST['email']);
                                                            mysqli_stmt_execute($statement);
                                                            $result = mysqli_stmt_get_result($statement);
                                                            $array = mysqli_fetch_assoc($result);
                                                            
                                                            if ($array['conteo']>0){

                                                                    //Aqui hay que hacer la magia del reset

                                                                    $secretKey  = 'bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=';
                                                                    $issuedAt   = new DateTimeImmutable();
                                                                    $expire     = $issuedAt->modify('+10 minutes')->getTimestamp();      // Add 600 seconds
                                                                    $notbefore  = $issuedAt->modify('+1 minutes')->getTimestamp();      // Add 60 seconds
                                                                    $serverName = "atlas.klu.mx";
                                                                    $username   = $_POST['user'];

                                                                    $payload = array(
                                                                        'iss'  => $serverName,                     // Issuer
                                                                        'sub' => 'RecoverPassword',                // Subject
                                                                        'exp'  => $expire,                         // Expire
                                                                        'nbf'  => $issuedAt->getTimestamp(),       // Not before
                                                                        'iat'  => $issuedAt->getTimestamp(),       // Issued at: time when the token was generated
                                                                        'userName' => $username                    // Private CLaim User
                                                                    );

                                                                    $header = array(
                                                                        'alg' => 'HS256',
                                                                        'typ' => 'JWT',
                                                                        'kid' => '10'
                                                                    );

                                                                    $jwt = JWT::encode($payload, $secretKey, 'HS256', null, $header);
                                                                
                                                                    echo '<div class="success" style="margin-top:100px;"><center>Te hemos enviado un correo con las instrucciones para cambiar tu contraseña</center></div>';
                                                                    echo '</div><a href="index.php"class="btn btn-primary btn-user btn-block">Ingresar</a>';
                                                                
                                                                }else {
                                                                    
                                                                    echo '<div class="alert"><center>No se encontró el usuario</center></div>';
                                                                    echo '</div><button type="submit" class="btn btn-primary btn-user btn-block">Siguiente</button>';
                                                    
                                                                }


                                                        }else {
                                                            echo '<div class="alert"><center>&nbsp;</center></div>';
                                                            echo '<input type="text" class="form-control form-control-user" id="user" required placeholder="Ingresa tu usuario..." name="user">
                                                            <input type="hidden" id="stage" name="stage" value="step1">';
                                                            echo '</div>
                                                            <button type="submit" class="btn btn-primary btn-user btn-block">Siguiente</button>';
                                                        }
                                                }
                                            ?>
                                        
                                    </form>
                                    <br>
                                    <p class="text-xs text-center"><a href="index.php">Ingresar</a></p>
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