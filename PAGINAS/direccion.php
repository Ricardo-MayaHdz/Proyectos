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
    <title>UBICACION</title>
    <link rel="stylesheet" href="css/styletitulo.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
  </head>
  <body>
     <center>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.108521735222!2d-99.63353128544638!3d19.277646350613473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8a28876228ef%3A0x40151a81933b1082!2sRefacciones+Volkswagen!5e0!3m2!1ses-419!2smx!4v1541447018791" width="1300" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
 
  </body>
</html>
