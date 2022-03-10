<?php
$hostname='localhost';
$username='root';
$password='';
$database='u419906885_crystalcarebd';

$conexion = new mysqli($hostname,$username,$password,$database);

if($conexion->connect_errno){
	echo "lo sentimos,el sitio web esta experimentando problemas";
}


/*
<?php

session_start();

$hostname='92.249.45.2';
$database='u419906885_crystalcarebd';
$username='u419906885_0229Admin';
$password='Admin0408';

$con = new mysqli($hostname,$username,$password,$database);


$name = $_POST['nombre'];
$mail = $_POST['email'];
$password = $_POST['contraseña'];
$password2 = $_POST['contraseña2'];
$phone = $_POST['numero'];
$lugarResidencia = $_POST['provincia'];


$s = "select * from Clientes where email = '$mail'"

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"Este email ya se encuentra asociado a una cuenta";
}else{
    $reg=" insert into Clientes(nombre_apellido, email, contraseña, telefono, provincia) 
    values ('$name', '$mail', '$password', '$phone', '$lugarResidencia')";
    mysqli_query($con, $reg);
    echo"Registro exitoso";
}

?> */


?>






