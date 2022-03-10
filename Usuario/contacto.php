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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../log/estilos/normalize.css" />
    <link rel="shortcut icon" href="../Fotos/fondoblanco.png" />
    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="style/estilos.css" />
  </head>
  <body>
    <!--Navegador lateral-->
    <div class="sidebar">
      <ul>
        <li>
          <i id="menu" class="fa fa-bars"><input type="checkbox" /></i>
        </li>
        <li onclick="location.href='panel.php'">
          <i class="fa fa-home"></i>
          <p>Inicio</p>
        </li>
        <li onclick="location.href='usuario.php'">
          <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
          <p>Usuario</p>
        </li>
        <li onclick="location.href='planes.php'">
          <i class="fa fa-laptop" aria-hidden="true"></i>
          <p>Planes</p>
        </li>
        <li class="active">
          <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
          <p>Contacto</p>
        </li>
        <li onclick="location.href='panelDeUsuarioOpciones.php'">
          <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;
          <p>Opciones</p>
        </li>
        <li onclick="location.href='../bdphp/cerrarsesion.php'">
          <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
          <p>Salir</p>
        </li>
      </ul>
    </div>

    <!--Cuerpo Principal-->
    <main class="main">
      <h1>¿Donde llevar mi PC?</h1>
      <img class="imgContacto" src="imagenes/undrawMyLocation52x.png" alt="">
      <div class="contactoUsuario">
        <div class="columnaIzquierda">
          <div class="follow">
            <b>Direccion:</b><i class="fa fa-map-marker"></i> El Jazmín 35,
            depto. N°1, Los Perales, S.S. de Jujuy
          </div>
          <div class="follow">
            <b>Telefono:</b><i class="fa fa-phone"></i> +54 9 3884734930
          </div>
          <div class="follow">
            <b>E-Mail:</b
            ><i class="fa fa-envelope-o"></i> crystaldesarrollo@gmail.com
          </div>
          <div class="follow">
            <label><b>Redes sociales:</b></label>
            <a
              href="https://www.facebook.com/Crystal-desarrollo-100310441729158"
              ><i class="fa fa-facebook"></i
            ></a>
            <a href="https://www.instagram.com/crystaldesarrollo/"
              ><i class="fa fa-instagram"></i
            ></a>
            <a
              href="https://api.whatsapp.com/send?phone=+5493884734930&text=¡Hola!, me gustaría consultar por uno de sus servicios"
              ><i class="fa fa-whatsapp"></i
            ></a>
          </div>
        </div>
        <div class="columnaDerecha">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.988871885636!2d-65.31301948556893!3d-24.17212304282137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0f0d5da757f3%3A0xd047cdc6ab5a5af!2sEl%20Jazmin%2035%2C%20San%20Salvador%20de%20Jujuy%2C%20Jujuy!5e0!3m2!1ses!2sar!4v1640649157531!5m2!1ses!2sar"
            width="100%"
            height="90%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </main>
  </body>
</html>
