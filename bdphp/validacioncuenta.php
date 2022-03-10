<?php
include 'conexion.php';

$mail = $_POST['email'];
$contrasena = $_POST['contraseña'];

//Conectar a la BD (forma sencilla)
$consulta="SELECT * FROM Clientes WHERE email='$mail' and contraseña='$contrasena' ";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
$fila = $resultado->fetch_assoc();

//Traer datos de la computadora relacionada al id del usuario
$consulta2="SELECT * FROM servicioscontratados WHERE id_cliente = '".$fila['id_cliente']."' ";
$resultado2=mysqli_query($conexion, $consulta2);

$filas2=mysqli_num_rows($resultado2);
$fila2 = $resultado2->fetch_assoc();

//Traer datos del plan relacionado al id del usuario
$consulta3="SELECT * FROM planes WHERE id_plan = '".$fila['id_plan']."' ";
$resultado3=mysqli_query($conexion, $consulta3);

$filas3=mysqli_num_rows($resultado3);
$fila3 = $resultado3->fetch_assoc();

mysqli_close($conexion);


if($filas>0){
    session_start();
    $_SESSION['id'] = $fila['id_cliente'];
    $_SESSION['usuario'] = $fila['nombre_apellido'];
    $_SESSION['dni'] = $fila['dni'];
    $_SESSION['telefono'] = $fila['telefono'];
    $_SESSION['email'] = $fila['email'];
    $_SESSION['estado_conexion'] = $fila['estado_conexion'];
    $_SESSION['fecha_renovacion'] = $fila['fecha_renov'];

    $_SESSION['fecha_modificacion'] = $fila2['fecha_modificacion'];
    $_SESSION['limpiezas_logicas_disp'] = $fila2['lim_log_disp'];
    $_SESSION['limpiezas_fisicas_disp'] = $fila2['lim_fis_disp'];
    $_SESSION['pasta_disp'] = $fila2['pasta_disp'];
    $_SESSION['antivirus_disp'] = $fila2['antivirus_disp'];

    $_SESSION['nombre_plan'] = $fila3['nombre_plan'];
    $_SESSION['cantidad_pc'] = $fila3['cantidad_pc'];

    if ($_SESSION['estado_conexion'] == null || $_SESSION['estado_conexion'] == 0){
        header("location:http://192.168.0.107/CRYSTAL/CrystalCare/Planes.php");
    }else{
        header("location:http://192.168.0.107/CRYSTAL/Usuario/panel.php");
    }
}else{
    echo "Error en la autentificación";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>