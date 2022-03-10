<?php
include 'conexion.php';
session_start();

$idplan = 4;
$limplogdisp = 8;
$limpfisdisp = 4;
$antivirusdisp = 8;
$pastadisp = 2;       
               
    $consulta="INSERT INTO servicioscontratados (id_cliente, lim_log_disp, lim_fis_disp, pasta_disp, antivirus_disp) 
                VALUES ('".$_SESSION['id']."','".$limplogdisp."','".$limpfisdisp."','".$pastadisp."','".$antivirusdisp."')";
                    
    mysqli_query($conexion,$consulta)or die("Problemas al insertar".mysqli_error($conexion));
    

   //Traer datos del plan relacionado al id del usuario
    $consulta3="SELECT * FROM planes WHERE id_plan = '".$_SESSION['id_plan']."' ";
    $resultado3=mysqli_query($conexion, $consulta3);
    $filas3=mysqli_num_rows($resultado3);
    $fila3 = $resultado3->fetch_assoc();

    mysqli_close($conexion);

    $_SESSION['limpiezas_logicas_disp'] = $limplogdisp;
    $_SESSION['limpiezas_fisicas_disp'] = $limpfisdisp;
    $_SESSION['pasta_disp'] = $pastadisp;
    $_SESSION['antivirus_disp'] = $antivirusdisp;

    $_SESSION['nombre_plan'] = $fila3['nombre_plan'];
    $_SESSION['cantidad_pc'] = $fila3['cantidad_pc'];
    echo'<script type="text/javascript">
                        alert("¡Registro realizado con éxito!");
                        window.location.href="http://192.168.0.107/CRYSTAL/Usuario/panel.php";
                        </script>';

?>