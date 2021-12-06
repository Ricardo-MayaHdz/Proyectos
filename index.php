<?php
  session_start();

    if ($_SESSION == null || $_SESSION == '') {
      ?>
      <style media="screen">
        .cerrar{
          display: none;
        }
      </style>
      <?php
    }else {
      ?>
      <style media="screen">
        .iniciar{
          display:none;
        }
      </style>
      <?php
    }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <link rel="stylesheet" href="css/styletitulo.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
  </head>
  <body class="body1" background="./imagenes/lolo.jpg">
    <div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="" class="hvr-underline-reveal"><b>INICIO</b></a></li>
        <li><a href="./paginas/catalogo.php" class="hvr-underline-reveal"><b>PRODUCTOS</b></a></li>
      </ul>
      <div class="iniciar">
        <a href="./paginas/cliente/registro.php" class="hvr-underline-reveal">INICIAR SESIÓN</a>
      </div>
      <div class="cerrar">
        <a href="./php/cerrar_sesion.php" class="hvr-underline-reveal">CERRAR SESIÓN</a>
      </div>
    </div>
    <div class="carrusel">
      <div class="container">
        <hr><hr>
      <marquee>  <h1>COSMETIC'S</h1> </marquee>
        <hr><hr>
        
        <span>EXCELENCIA EN CALIDAD Y MEJORES PRECIOS</span>
        <span></span>
      </div>
    </div>
    <div class="cuadrofondo">
      <div class="contenedor_vistas">
        <div class="vista">
          <div class="slider">
        			<ul>
        				<li>
                  <img src="imagenes/giphy.gif" class="animacion_imagen">
                 </li>
                 <li>
                  <img src="imagenes/giphy.gif" class="animacion_imagen">
                </li>
                <li>
                  <img src="imagenes/giphy.gif" class="animacion_imagen">
                 </li>
        			</ul>
      		</div>
        </div>
        <div class="vista">
            <img src="imagenes/portada.png" class="" width="100%" height="100%">
       
        </div>
        <div class="vista">
              <img src="imagenes/portada1.jpg" class="" width="100%" height="100%"><br>
              
        
		<br><br>
      </div>
      <div class="imagen_fondo">
        <div class="contenedor_general">
         
        </div>
      </div>
      <div class="pie_pagina">
          <a class="c1">CONTACTOS:</a>
          <a class="c1">CEL 5544134553 Y 5545787814</a>
      </div>
      <div class="pie_pagina">
          <a class="c1">FACEBOOK:</a>
          <a class="c1">SHARIS MAKEUP</a>
      </div>
    </div>
  </body>
</html>
