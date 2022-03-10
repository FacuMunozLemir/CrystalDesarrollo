<?php
include 'conexion.php';
$id_usuario=$_POST['id'];
$contrasena1=$_POST['contraseña'];
$contraseña2=$_POST['contraseña2'];
$email=$_POST['email'];

if($contrasena1 == $contraseña2){
    $consulta=("UPDATE clientes SET contraseña='$contrasena1'
    WHERE id_cliente='$id_usuario' ");
   
   echo'<script type="text/javascript">
                   alert("Modificacion realizada con éxito! Podrá ver los cambios la proxima vez que inicie sesión");
                   window.location.href="http://192.168.0.107/CRYSTAL/Usuario/usuario.php";
                   </script>';
}else{
    echo'<script type="text/javascript">
                   alert("Las contraseñas no coinciden");
                   </script>';
}

mysqli_query($conexion,$consulta)or die("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);

?>