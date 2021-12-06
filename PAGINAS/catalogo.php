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
.Estilo2 {font-size: 24px}
    </style>
    <?php
  }   
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PRODUCTOS</title>    
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
    <link href="../css/styletitulo.css" rel="stylesheet" type="text/css">
  </head>
  <body class="fondocatalogo" background="../imagenes/lolo.jpg">
  <div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="..\index.php" class="hvr-underline-reveal">INICIO</a></li>
        <li><a href="" class="hvr-underline-reveal">PRODUCTOS</a></li>    
      </ul>
      <div class="iniciar">
        <a href="./cliente/registro.php" class="hvr-underline-reveal"><b>INICIAR SESIÓN</b></a>
      </div>
      <div class="cerrar">
        <a href="../php/cerrar_sesion.php" class="hvr-underline-reveal"><b>CERRAR SESIÓN</b></a>
      </div>
    </div> 
    <br><br><br><br><br>
    <div class="contenedor_productos2">

      <a href="cliente/carrito.php"><img src="../imagenes/carrito1.png" align="right"  width="5%" height="10%" hspace="10"></a>

      <a href="cliente/perfil.php">PERFIL</a>
  </div><br>

  <div class="contenedor_catalogo">
  <h2 class="titulo_catalogo">ARTICULOS</h2><br>
  <center><div class="linea"></div></center>
  
<?php
    require '../php/conexion.php';
  $con=conectar();
       
  $cliente=$_SESSION['usuario'];
    $sql = "SELECT clave,titulo,nombre,cantidad,precio,imagen FROM productos";
    $result = mysql_query ($sql,$con);
      // verificamos que no haya error
      if (! $result){
         echo "La consulta SQL contiene errores.".mysql_error();
         exit();
      }else {
      //obtenemos los datos resultado de la consulta
          while ($row = mysql_fetch_row($result)){
?>
            <form action="agregarcarrito.php" method="post" autocomplete="off">
      <div class="cuadro_imagen">
            <input type="hidden" name="agregar">

            <!--*********************************************************-->                                                                        
                          <center>
                            <ul><h2><?php echo "$row[1]"?></h2></ul>
                            <ul><?php $cantp=$row[3];?>
                            <?php if ($cantp<=0)
                            {?>
                            <span style="color:red;">!Producto agotado!</span>
                            <ul><h2>precio: $<?php echo "$row[4]"; ?></h2></ul><br>
                            <ul><hr class="linea"></ul><br>
                            <ul>Cantidad: <input type="number" name="cantidad" min='1' value="" required class="caja_texto" disabled></ul><br>
                            <ul><input type="submit" name="" value="Agregar a carrito" class="boton-agregar" disabled> </ul>
                            <?php 
                            }
                            else
                            {?>
                            <h4>Articulo en existencia: <?php echo "$row[3]";?></h4>
                            <ul><h2>precio: $<?php echo "$row[4]"; ?></h2></ul>
                            <br>
                            <ul><hr class="linea"></ul><br>
                            <!--**************************-->
                            <?php echo'<ul>Cantidad: <input type="number" name="cantidad" min="1" max="'.$row[3].'" value="" required class="caja_texto"></ul><br>';?>
                            <!--*********************-->
                            <ul><input type="submit" name="" value="Agregar a carrito" class="boton-agregar"> </ul>
                            </ul>
                            <?php
                            }
                            ?>
                          </center>
                      <table class="centrado_tabla">
                    <br>         
                      </table>
            <center>                   
              </center>
                    <!--*******************************************************************-->


                            <input type="text" name="clave" value="<?php echo "$row[0]"; ?>" class="oculto">
                            <input type="text" name="precio" value="<?php echo "$row[4]"; ?>" class="oculto">
                            <input type="text" name="nombre_producto" value="<?php echo "$row[1]"; ?>" class="oculto">
                            <br>
                            <?php $imagen=$row[5]; echo "<center><img src='../imagenes/$imagen' class='animacion_imagen'></center>";
                            ?> <br>                                   
      </div>
    </form>
  <br>
          <?php
         }
       }
       ?>
  </div>
  <br>
    <div class="pie_pagina">
        <a class="c1">CONTACTOS:</a>
        <a class="c1">CEL 5544123456 Y 5545787814</a>
    </div>
    <div class="pie_pagina">
          <a class="c1">FACEBOOK:</a>
          <a class="c1">SHARIS MAKEUP</a>
      </div>
  </body>
</html>