
<?php
  ini_set('display_errors','off');
  ini_set('display_startup_errors','off');
  error_reporting(0);
  session_start();
  
  require('../../php/conexion.php');
  $con=conectar();
  
  $cliente=$_SESSION['usuario'];
  
  $clave=$_POST['clave'];
  $cantidad=$_POST['cantidad'];
  $nombre=$_POST['nombre_producto'];
  $precio=$_POST['precio'];
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
    </style>
    <?php
  }
  if(isset($_POST['agregar'])){ //Si se envió el primer formulario
    if ($_SESSION == null || $_SESSION == '') {
      echo "<script type=\"text/javascript\">
                  alert(\"Debes iniciar sesion para agregar a carrito\");
                  </script>";
      isset($_POST['']);
    }else {	           
      $insertar="INSERT INTO carrito(usuario,clave,nombre_producto,cantidad,precio) values('$cliente','$clave','$nombre','$cantidad','$precio')";
      $resultado=mysqli_query($con,$insertar)
      or die("NO agregado a carrito");
      mysqli_close($con);
      echo "<script type=\"text/javascript\">
                  alert(\"agregado a carrito\");
                  </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PERFIL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
    <link href="../../css/styletitulo.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    function alerta(){
      var confirmacion = confirm("Estas seguro que deseas eliminar esta cuenta");
      if(confirmacion){
      window.location='../../php/eliminarcuenta.php';
      }
    }
    </script>
  </head>
  <body class="body2" background="../../imagenes/lolo.jpg">
    <div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="../../index.php" class="hvr-underline-reveal"><b>INICIO</b></a></li>
        <li><a href="../catalogo.php" class="hvr-underline-reveal"><b>PRODUCTOS</b></a></li>
      </ul>
      <div class="iniciar">
        <a href="registro.php" class="hvr-underline-reveal">INICIAR SESIÓN</a>      </div>
      <div class="cerrar">
        <a href="../../php/cerrar_sesion.php" class="hvr-underline-reveal">CERRAR SESIÓN</a>      </div>
    </div><br><br><br><br><br><br>    
      <?php         
      $sql = "SELECT usuario,nombre,apellido,contrasena,correo FROM usuarios WHERE usuario='$cliente'";
      $result = mysql_query ($sql);
      // verificamos que no haya error
      if (! $result){
         echo "La consulta SQL contiene errores.".mysql_error();
         exit();
      }else {
      //obtenemos los datos resultado de la consulta
          while ($row = mysql_fetch_row($result)){
            ?>
                <div class="contenedor_productos1">
                  <div class="contenedor_vistas1">
                    <div class="especificaciones">
                     <center><h1 class="titulo_producto">DETALLE DEL USUARIO:</h1></center>
                      <center><div class="linea"></div></center>
                      <form action="../../php/actividadperfil.php" method="POST" autocomplete="off" class="form">
                        <input type="hidden" name="agregar">
                        <b><a>Modificar datos</a></b>
                        <div class="group">
                          <input type="text" required="required" value="<?php echo "$row[1]"; ?>" name="nombre"/><span class="highlight"></span><span class="bar"></span>
                          <label><span class="icon-users"></span>Nombre:</label>
                        </div>
                        <div class="group">
                          <input type="text" required="required" value="<?php echo "$row[2]"; ?>" name="apellido"/><span class="highlight"></span><span class="bar"></span>
                          <label><span class="icon-lock"></span>apellidos:</label>
                        </div>
                        <div class="group">
                          <input type="text" required="required" enable="true" value="<?php echo "$row[0]"; ?>"name="usuario"/><span class="highlight"></span><span class="bar"></span>
                          <label><span class="icon-lock"></span>subnombre para el sitio:</label>
                        </div>
                        <div class="group">
                          <input type="text" required="required" value="<?php echo "$row[3]"; ?>" name="contra"/><span class="highlight"></span><span class="bar"></span>
                          <label><span class="icon-lock"></span>contraseña:</label>
                        </div>
                        <div class="group">
                          <input type="text" required="required" enable="true" value="<?php echo "$row[4]"; ?>"name="correo"/><span class="highlight"></span><span class="bar"></span>
                          <label><span class="icon-lock"></span>correo:</label>
                        </div>
                        <div class="btn-box">
                          <input class="btn btn-submit" name="enviar" type="submit" value="Actualizar datos">
                          <input class="btn btn-cancel" type="button" value="cancelar" onClick="location.href='../catalogo.php'">
                        </div>
                      </form>
                      <br>
                      <center><a onClick="alerta()" class="baja"><b>ELIMINAR</b></a></center>
				   </div>
                  </div>
  </div>
                  </form><br>;
          <?php
         }
       }
       ?>
    <div class="pie_pagina">
          <a class="c1">CONTACTOS:</a>
          <a class="c1">CEL 5512343456 Y 5545787814</a>
      </div>
      <div class="pie_pagina">
          <a class="c1">FACEBOOK:</a>
          <a class="c1">SHARIS MAKEUP</a>
      </div>
  </body>
</html>
