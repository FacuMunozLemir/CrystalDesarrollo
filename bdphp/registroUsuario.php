<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$mail = $_POST['email'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['numero'];
$lugarResidencia = $_POST['provincia'];


$duplicado="SELECT * FROM Clientes WHERE email='$mail' ";
$resultado=mysqli_query($conexion, $duplicado);
$filas=mysqli_num_rows($resultado);
if($filas<1){
        $consulta="INSERT INTO Clientes (nombre_apellido, dni, telefono, email, contraseña, provincia) 
            VALUES ('".$nombre."','".$dni."','".$telefono."','".$mail."','".$contraseña."','".$lugarResidencia."')";

        mysqli_query($conexion,$consulta)or die("Problemas al insertar".mysqli_error($conexion));
        mysqli_close($conexion);


        echo'<script type="text/javascript">
                alert("¡Registro realizado con éxito!");
                window.location.href="http://192.168.0.107/CRYSTAL/log/login.html";
                </script>';
}else{
        echo'<script type="text/javascript">
                alert("Este mail ya se encuentra asociado a una cuenta. Por favor Inicie Sesión");
                window.location.href="http://crystal-desarrollo.com/log/login.html";
                </script>';
}


?>