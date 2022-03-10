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
<html lang="es">
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
    <link rel="stylesheet" href="../log/estilos/normalize.css" />
    <link rel="shortcut icon" href="../Fotos/fondoblanco.png" />

    <title>Panel de Ususario</title>
    <link rel="stylesheet" href="style/estilos.css" />
  </head>
  <body>
    <!--Navegador Lateral-->
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
        <li class="active" onclick="location.href='#'">
          <i class="fa fa-laptop" aria-hidden="true"></i>
          <p>Planes</p>
        </li>
        <li onclick="location.href='contacto.php'">
        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
        <p>Contacto</p>
        </li>
        <li onclick="location.href='panelDeUsuarioOpciones.php'">
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
      <div class="arribaPlanes">
        <div class="arribaPlanes-texto">
          <h1>Crystal Care</h1>
          <h2>Planes y precios</h2>
        </div>
        <div class="arribaPlanes-imagen">
          <img src="imagenes/undraw_Happy_announcement_re_tsm0.png" alt="" />
        </div>
      </div>

      <div class="informacionBajaDePlanes">
        <blockquote class="twitter-tweet">
          <p lang="es" dir="ltr">
            Para anular tu suscripción, ingresa en Mercado Pago &gt; Tu perfil
            &gt; Ver mis débitos automáticos.<br /><br />Haz clic en el icono de
            los tres puntos que se encuentran en el borde superior derecho y
            elige la opción &quot;Dar de baja&quot;.
          </p>
          &mdash; Mercado Pago (@mercadopago)
          <a
            href="https://twitter.com/mercadopago/status/1326951917457649664?ref_src=twsrc%5Etfw"
            >November 12, 2020</a
          >
        </blockquote>
        <script
          async
          src="https://platform.twitter.com/widgets.js"
          charset="utf-8"
        ></script>
      </div>

      <div class="abajoPlanes">
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
                  <li>
                    <i class="fa fa-check-circle"></i>Optimizacion anual básica
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Descuentos y beneficios en
                    comercios
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Extensión de garantía a 6
                    meses
                  </li>
                  <li>
                    <i class="fa fa-times-circle"></i>10% de desc. en otros
                    servicios
                  </li>
                  <li>
                    <i class="fa fa-times-circle"></i>15% de desc. en otros
                    servicios
                  </li>
                </ul>
              </div>
              <div class="price-button">
                <a
                  mp-mode="dftl"
                  href="https://www.mercadopago.com.ar/subscriptions/checkout?preapproval_plan_id=2c9380847d51818e017d52dab383011b"
                  class="buy-btn"
                  >Unirse</a
                >
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
                  <li>
                    <i class="fa fa-check-circle"></i>Optimizacion anual PRO
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Descuentos y beneficios en
                    comercios
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Extensión de garantía a 1
                    año
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>15% de desc. en otros
                    servicio
                  </li>
                  <li>
                    <i class="fa fa-times-circle"></i>10% de desc. en otros
                    servicios
                  </li>
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
                  <li>
                    <i class="fa fa-check-circle"></i>Optimizacion anual básica
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Descuentos y beneficios en
                    comercios
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Extensión de garantía a 6
                    meses
                  </li>
                  <li>
                    <i class="fa fa-times-circle"></i>10% de desc. en otros
                    servicios
                  </li>
                  <li>
                    <i class="fa fa-times-circle"></i>15% de desc. en otros
                    servicios
                  </li>
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
                  <li>
                    <i class="fa fa-check-circle"></i>Optimizacion anual PRO
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Descuentos y beneficios en
                    comercios
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>Extensión de garantía a 1
                    año
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>15% de desc. en otros
                    servicio
                  </li>
                  <li>
                    <i class="fa fa-times-circle"></i>10% de desc. en otros
                    servicios
                  </li>
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
  </body>
</html>
