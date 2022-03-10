<?php
    include 'conexion.php';
    session_start();

    $id_plan = 3;
    $fecha_alta = date("Y-m-d");
    $fecha_renovacion = date("Y-m-d", strtotime ('next Year'));
    $estado_contable = 'SIN DEUDAS';
    $estado_conexion = 1;
    $varsession = $_SESSION['id'];


    if($varsession == null || $varsession = '')
    {
        echo'<script type="text/javascript">
        alert("Por favor! Inicie sesión para ver todos los planes y comenzar a disfrutar de Crystal Care");
        window.location.href="http://192.168.0.107/CRYSTAL/log/login.html";
        </script>';
        die();
    }else{
        
            $consulta=("UPDATE clientes SET fecha_alta='$fecha_alta', fecha_renov='$fecha_renovacion', id_plan='$id_plan', estado_contable='$estado_contable', estado_conexion='$estado_conexion'
                        WHERE id_cliente= '".$_SESSION['id']."' ");

                mysqli_query($conexion,$consulta)or die("Problemas al insertar".mysqli_error($conexion));
                mysqli_close($conexion);
                echo $varsession;
               
                $_SESSION['fecha_renovacion'] = $fecha_renovacion;
                $_SESSION['id_plan'] = $id_plan;
                echo'<script type="text/javascript">
                        alert("¡Registro realizado con éxito!");
                        window.location.href="http://192.168.0.107/CRYSTAL/bdphp/ingresoPc994.php";
                        </script>';
        }

?>