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
    <link rel="shortcut icon" href="../Fotos/fondoblanco.png" />

    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="style/estilos.css" />
  </head>
  <body>

    <!--Barra de navegación lateral-->
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

        <li onclick="location.href='contacto.php'">
        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
        <p>Contacto</p>
        </li>

        <li class="active" onclick="location.href='#'">
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
    <div class="main">
 
        <div class="leftUsuario">
            <h1>Configuración</h1>
            <form class="formulario-datos" method="POST" action="http://192.168.0.107/CRYSTAL/bdphp/modificarContrasena.php" name="formulario1">

                <div class="datos-usuario">
                    <div class="usuario-izquierda">
                        <div class="input-group" id="id_usuario">
                            <label class="input-fill">
                                <input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" id="id" placeholder=" " required readonly>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="nombre" value="<?php echo $_SESSION['usuario'] ?>" id="nombre" placeholder=" " required readonly>
                                <span class="input-label">Nombre Completo</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="email" value="<?php echo $_SESSION['email'] ?>" id="email" placeholder=" " required readonly>
                                <span class="input-label">E-mail</span>
                            </label>
                        </div>
                        
                    </div>    
                    
                    <div class="usuario-derecha">
                        

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="password" name="contraseña" id="contraseña" placeholder=" " required>
                                <span class="input-label">Nueva Contraseña</span>
                            </label>
                        </div>
                                
                        <div class="input-group">
                            <label class="input-fill">
                                <input type="password" name="contraseña2" id="contraseña2" placeholder=" " required>
                                <span class="input-label">Repetir nueva contraseña</span>
                            </label>
                        </div>
                    </div>
                </div>
                                    

                <input type="submit" value="Modificar" class="btn-registro" id="login" />

            </form>
        </div>


  </body>
</html>
