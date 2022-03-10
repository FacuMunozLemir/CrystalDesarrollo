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

    <div class="sidebar">
        <ul>
            <li><i id="menu" class="fa fa-bars"><input type="checkbox"></i></li>
            <li onclick="location.href='panel.php'"><i class="fa fa-home"></i><p>Inicio</p></li>
            <li class="active"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<p>Usuario</p></li>
            <li onclick="location.href='planes.php'"><i class="fa fa-laptop" aria-hidden="true"></i><p>Planes</p></li>
            <li onclick="location.href='contacto.php'">
            <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
            <p>Contacto</p>
            </li>
            <li onclick="location.href='panelDeUsuarioOpciones.php'"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;<p>Opciones</p></li>
            <li onclick="location.href='../bdphp/cerrarsesion.php'"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;<p>Salir</p></li>
        </ul>
    </div>


    <!--Cuerpo Principal-->
    <div class="main">
 
        <div class="leftUsuario">
            <h1>Datos de Usuario</h1>
            <form class="formulario-datos" method="POST" action="http://192.168.0.107/CRYSTAL/bdphp/modificarUsuario.php" name="formulario1">

                <div class="datos-usuario">
                    <div class="usuario-izquierda">
                        <div class="input-group" id="id_usuario">
                            <label class="input-fill">
                                <input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" id="id" placeholder=" " required>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="nombre" value="<?php echo $_SESSION['usuario'] ?>" id="nombre" placeholder=" " required>
                                <span class="input-label">Nombre Completo</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="dni" id="dni" value="<?php echo $_SESSION['dni'] ?>" placeholder=" " required>
                                <span class="input-label">DNI</span>
                            </label>
                        </div>
                    </div>    
                    
                    <div class="usuario-derecha">
                    <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="telefono" value="<?php echo $_SESSION['telefono'] ?>" id="telefono" placeholder=" " required>
                                <span class="input-label">Teléfono</span>
                            </label>
                        </div>
                                
                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="email" value="<?php echo $_SESSION['email'] ?>" id="email" placeholder=" " required>
                                <span class="input-label">Email</span>
                            </label>
                        </div>
                    </div>
                </div>
                                    

                <input type="submit" value="Modificar" class="btn-registro" id="login" />

            </form>
        </div>

            <div class="rightUsuario">
                <h1>Datos de Plan</h1>
                <div class="datos-plan">
                    <div class="plan-izquierda">
                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre_plan'] ?>" placeholder=" " readonly>
                                <span class="input-label">Nombre del Plan</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="number" name="dni" id="dni" value="<?php echo $_SESSION['cantidad_pc'] ?>" placeholder=" " readonly>
                                <span class="input-label">Cantidad de PC</span>
                            </label>
                        </div>
                            
                        <div class="input-group">
                            <label class="input-fill">
                                <input type="date" name="fecha_renovacion" id="fecha_renovacion" value="<?php echo $_SESSION['fecha_renovacion'] ?>" placeholder=" " readonly>
                                <span class="input-label">Fecha de Renovación</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="fecha_ult_serv" id="fecha_ult_serv" placeholder=" " readonly>
                                <span class="input-label">Fecha ultimo servicio</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="plan-derecha">
                        <div class="input-group">
                            <label class="input-fill">
                                <input type="number" name="limp_log_disp" id="limp_log_disp" value="<?php echo $_SESSION['limpiezas_logicas_disp']?>" placeholder=" " readonly>
                                <span class="input-label">Limpiezas Lógicas Disp.</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="number" name="limp_fis_disp" id="limp_fis_disp" value="<?php echo $_SESSION['limpiezas_fisicas_disp']?>" placeholder=" " readonly>
                                <span class="input-label">Limpiezas Físicas Disp.</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="anti_virus_disp" id="anti_virus_disp" value="<?php echo $_SESSION['antivirus_disp'] ?>" placeholder=" " readonly>
                                <span class="input-label">Anti-Virus Disp.</span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="input-fill">
                                <input type="text" name="pasta_disp" id="pasta_disp" value="<?php echo $_SESSION['pasta_disp'] ?>" placeholder=" " readonly>
                                <span class="input-label">Cambios de pasta térmica</span>
                            </label>
                        </div>
                    </div>
                </div>
                    
            </div>
        
    </div>

</body>
</html>