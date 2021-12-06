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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styletitulo.css">
  </head>
      <frameset rows="47px,100%" border="0"><!--DECLARACION DE FILAS  -->
          <frame name="indice" src="menu.php" ><!--DECLARACION DE LA PRIMERA FILA  -->
          <frameset cols="16%,80%"><!--DECLARACION DE FRAME DE COLUMNAS OTRA FRAME DENTRO DE OTRO FRAME   target -->
              <frame name="indice" src="lista_menu.php">
              <frame name="principal" src="principal.php">
          </frameset>
          <noframes><!-- MENSAJE SI EL NAVEGADOR NO SOPORTA LOS FRAM ES -->
            <p>Si tu navegador no acepta frames, estarás viendo este mensaje. ¡Lo sentimos!</p>
          </noframes>
      </frameset>
</html>
