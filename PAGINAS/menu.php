<?php
  ini_set('display_errors','off');
  ini_set('display_startup_errors','off');
  error_reporting(0);
  session_start();
  if ($_SESSION == null || $_SESSION == '') {
    ?>
    <style media="screen">
      .cerrar{
        display: none;
      }
      .contenedor_productos2{
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
      <?php
    }
    ?>
</style>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
    <link rel="stylesheet" href="../css/styletitulo.css">    
  </head>
<body class="body2">
      <div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="../index.php" class="hvr-underline-reveal" TARGET="_parent"><b>INICIO</b></a></li>
        <li><a href="catalogo.php" class="hvr-underline-reveal" TARGET="_parent"><b>PRODUCTOS</b></a></li>       
      </ul>
      <div class="iniciar">
        <a href="registro.php" class="hvr-underline-reveal" TARGET="_parent">INICIAR SESION</a>
      </div>
      <div class="cerrar">
        <a href="../php/cerrar_sesion.php" class="hvr-underline-reveal" TARGET="_parent">CERRAR SESION</a>
      </div>
    </div>
</body>