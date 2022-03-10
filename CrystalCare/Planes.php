<?php
session_start();

$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
    echo'<script type="text/javascript">
    alert("Por favor! Inicie sesión para ver todos los planes y comenzar a disfrutar de Crystal Care");
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
    <link rel="shortcut icon" href="../Fotos/fondoblanco.png" />
    <link rel="stylesheet" href="Planes.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Crystal Care</title>
</head>

<body>
    <!--------NavigationBar-------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.html"><img src="fotos/logoCrystalC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="CrystalCare.html">Crystal Care</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Usuario/panel.php" tabindex="-1" aria-disabled="true">Panel de usuario <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
              </li>
              </ul>
            </div>
          </nav>
    </section>



    <div class="main">     
       
        <div class="arriba">
            <div class="arriba-texto">
                <h1>Crystal Care</h1>
                <h2>Planes y precios</h2>
            </div>
            <div class="arriba-imagen">
                <img src="fotos/undraw_Happy_announcement_re_tsm0.png" alt="#">
            </div>
            
        </div>

        <div class="abajo">
            <div class="row">
                <div class="col-md-3">
                  <div class="single-price">
                    <div class="price-head">
                      <h2>Plan 229</h2>
                      <p>$436/<span>mes</span></p>
                    </div>
                    <div class="price-content">
                      <ul>
                        <li><i class="fa fa-check-circle"></i>Plan para 1 PC</li>
                        <li><i class="fa fa-check-circle"></i>Optimizacion anual básica</li>
                        <li><i class="fa fa-check-circle"></i>Descuentos y beneficios en comercios</li>
                        <li><i class="fa fa-check-circle"></i>Extensión de garantía a 6 meses</li>
                        <li><i class="fa fa-times-circle"></i>10% de desc. en otros servicios</li>
                        <li><i class="fa fa-times-circle"></i>15% de desc. en otros servicios</li>
                      </ul>
                    </div>
                    <div class="price-button">
                      <a mp-mode="dftl" href="http://192.168.0.107/CRYSTAL/bdphp/ingresoUsuario229.php" class="buy-btn">Unirse</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="single-price">
                    <div class="price-head">
                      <h2>Plan 484</h2>
                      <p>$832/<span>mes</span></p>
                    </div>
                    <div class="price-content">
                      <ul>
                        <li><i class="fa fa-check-circle"></i>Plan para 1 PC</li>
                        <li><i class="fa fa-check-circle"></i>Optimizacion anual PRO</li>
                        <li><i class="fa fa-check-circle"></i>Descuentos y beneficios en comercios</li>
                        <li><i class="fa fa-check-circle"></i>Extensión de garantía a 1 año</li>
                        <li><i class="fa fa-check-circle"></i>15% de desc. en otros servicio</li>
                        <li><i class="fa fa-times-circle"></i>10% de desc. en otros servicios</li>
                        
                      </ul>
                    </div>
                    <div class="price-button">
                      <a href="https://www.mercadopago.com.ar/subscriptions/checkout?preapproval_plan_id=2c9380847dfcea30017e01bac0cf01a6" class="buy-btn">Unirse</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="single-price">
                    <div class="price-head">
                      <h2>Plan 994</h2>
                      <p>$870/<span>mes</span></p>
                    </div>
                    <div class="price-content">
                      <ul>
                        <li><i class="fa fa-check-circle"></i>Plan para 2 PC</li>
                        <li><i class="fa fa-check-circle"></i>Optimizacion anual básica</li>
                        <li><i class="fa fa-check-circle"></i>Descuentos y beneficios en comercios</li>
                        <li><i class="fa fa-check-circle"></i>Extensión de garantía a 6 meses</li>
                        <li><i class="fa fa-times-circle"></i>10% de desc. en otros servicios</li>
                        <li><i class="fa fa-times-circle"></i>15% de desc. en otros servicios</li>
                      </ul>
                    </div>
                    <div class="price-button">
                      <a href="https://www.mercadopago.com.ar/subscriptions/checkout?preapproval_plan_id=2c9380847dfcea98017e01e2fabd019d" class="buy-btn">Unirse</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="single-price">
                    <div class="price-head">
                      <h2>Plan 494</h2>
                      <p>$1663/<span>mes</span></p>
                    </div>
                    <div class="price-content">
                      <ul>
                        <li><i class="fa fa-check-circle"></i>Plan para 2 PC</li>
                        <li><i class="fa fa-check-circle"></i>Optimizacion anual PRO</li>
                        <li><i class="fa fa-check-circle"></i>Descuentos y beneficios en comercios</li>
                        <li><i class="fa fa-check-circle"></i>Extensión de garantía a 1 año</li>
                        <li><i class="fa fa-check-circle"></i>15% de desc. en otros servicio</li>
                        <li><i class="fa fa-times-circle"></i>10% de desc. en otros servicios</li>
                      </ul>
                    </div>
                    <div class="price-button">
                      <a href="https://www.mercadopago.com.ar/subscriptions/checkout?preapproval_plan_id=2c9380847dfcea9d017e01e4d16c01c0" class="buy-btn">Unirse</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        
    </div> 

    <!----------Footer---------->
    <section id="footer">
      <div class="container text-center">
        <p>Hecho con <i class="fa fa-heart-o"></i> por Crystal Development</p>
      </div>
    </section>
    <!----------FooterEnd---------->

  </body>
</html>