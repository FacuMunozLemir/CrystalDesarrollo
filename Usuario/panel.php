<?php
session_start();

$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
    echo'<script type="text/javascript">
    alert("Para Ingresar al panel primero debe Iniciar Sesión");
    window.location.href="http://192.168.0.107/CRYSTAL/log/login.html";
    </script>';
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../log/estilos/normalize.css">
    <link rel="shortcut icon" href="../Fotos/fondoblanco.png"/>

    <title>Panel de Ususario</title>
    <link rel="stylesheet" href="style/estilos.css">
</head>
    <body>
        <!--Navegador lateral-->
        <div class="sidebar">
            <ul>
                <li><i id="menu" class="fa fa-bars"><input type="checkbox"></i></li>
                <li class="active"><i class="fa fa-home"></i><p>Inicio</p></li>
                <li onclick="location.href='usuario.php'"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<p>Usuario</p></li>
                <li onclick="location.href='planes.php'"><i class="fa fa-laptop" aria-hidden="true"></i><p>Planes</p></li>
                <li onclick="location.href='contacto.php'"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<p>Contacto</p></li>
                <li onclick="location.href='panelDeUsuarioOpciones.php'"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;<p>Opciones</p></li>
                <li onclick="location.href='../bdphp/cerrarsesion.php'"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;<p>Salir</p></li>
            </ul>
        </div>


        <!--Cuerpo Principal-->
        <div class="main">
            <div class="title-user">
                <div class="title-left">
                    <h1>Bienvenido a tu panel de control</h1>
                    <p><?php echo $_SESSION['usuario'] ?></p>
                </div>
                <div class="title-right">
                    <img src="imagenes/undrawStartupLife.png" alt="#">
                </div>
                
            </div>
            <div class="cards-area">
                <p>¡Para sumar tu comercio a nuestros auspiciantes hacé click acá!</p>
                <button onclick="window.location.href='#'" class="btn-registro" id="login">Sumarme</button>      
            </div>
            <div class="benefits">
                <div class="column-shop">
                    <h4>Negocios</h4>
                    <p>Mi cochera & Mi lavadero</p>
                    <p>Super Goyo</p>
                    <p>Quantum Fit GYM</p>
                    <p>Zebra GYM</p>
                </div>
                <div class="column-discount">
                    <h4>Beneficios</h4>
                    <p>10% OFF</p>
                    <p>10% OFF</p>
                    <p>10% OFF</p>
                    <p>10% OFF</p>
                </div>
                <div class="column-location">
                    <h4>Ubicacion</h4>
                    <p>14 sucursales en todo el centro</p>
                    <p>Juana Manuela Gorriti N°22</p>
                    <p>Ramirez de Velazco N°552</p>
                    <p>Av. Corrientes N°2833</p>
                </div>
            </div>
        </div>

    </body>
</html>

