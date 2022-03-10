<?php
include 'conexion.php';

$id_usuario=$_POST['id'];
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];


$consulta=("UPDATE clientes SET nombre_apellido='$nombre',dni='$dni',telefono='$telefono',email='$email'
 WHERE id_cliente='$id_usuario' ");



echo'<script type="text/javascript">
                alert("Modificacion realizada con éxito! Podrá ver los cambios la proxima vez que inicie sesión");
                window.location.href="http://192.168.0.107/CRYSTAL/Usuario/usuario.php";
                </script>';


mysqli_query($conexion,$consulta)or die("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);
$_SESSION['usuario'] = $nombre;
$_SESSION['dni'] = $dni;
$_SESSION['telefono'] = $telefono;
$_SESSION['email'] = $email;
?>