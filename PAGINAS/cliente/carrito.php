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
    <title>CARRITO</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
    <link href="../../css/styletitulo.css" rel="stylesheet" type="text/css">
  </head>
  <body class="body2">
    <div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="../../index.php" class="hvr-underline-reveal"><b>INICIO</b></a></li>
        <li><a href="../catalogo.php" class="hvr-underline-reveal"><b>PRODUCTOS</b></a></li>
      </ul>
      <div class="iniciar">
        <a href="registro.php" class="hvr-underline-reveal">INICIAR SESIÓN</a></div>
      <div class="cerrar">
        <a href="../../php/cerrar_sesion.php" class="hvr-underline-reveal">CERRAR SESIÓN</a>      </div>
    </div>
 <br><br><br>
<div class="contenedor_carrito">
          <a class="titulo_carrito" ><img src="../../imagenes/carrito1.png" width="15%" height="200%"></a>
		  <br><br>
          <div class="linea_carrito"></div>
		  <br>
            <?php
               require '../../php/conexion.php';
			   $con=conectar();
			   
			   $totalprecio=0;
			   
               $cliente=$_SESSION['usuario'];
               $sqlconsu = "SELECT clave,nombre_producto,cantidad,precio FROM carrito WHERE usuario='$cliente'";
               $resultado = mysql_query ($sqlconsu);			   
			   if(mysql_num_rows($resultado)>0)
			   {
			   		
					$sql = "SELECT clave,nombre_producto,cantidad,precio FROM carrito WHERE usuario='$cliente'";
               $result = mysql_query ($sql);
               // verificamos que no haya error
               if (! $result){
                 echo "La consulta SQL contiene errores.".mysql_error();
                 exit();
               }else {			  			   
                 ?>
                  <table class="tabla_carrito" width=100%>
                        <tr class="titulo_tabla_carrito">
                          <td width="428px"><b>Nombre del producto</b></td>
                          <td width="100px"><b>Precio</b></td>
                          <td width="210px"><b>cantidad</b></td>
                          <td width="75px"><b>Sub Total</b></td>
                          <td width="105px"><b>Acciones</b></td>
                        </tr>
                 <?php
                      //obtenemos los datos resultado de la consulta
                while ($row=mysql_fetch_row($result)){												
				$precioA=$row[3];
					$precioT=$precioA*$row[2];
					$total=$total+$precioT;
                    ?>
					
                      <tr>
                        <td><?php echo "$row[1]"; ?></td>
                        <td>$ <?php echo "$row[3]"; ?>.00</td>
                        <td>
						<?php $cantidad_nueva=$row[2]; ?>
							<form method="post" action="../actualizar_carrito.php">
								<input type="number" value="<?php echo "$cantidad_nueva"; ?>" class="input_numbre" name="cantidad">
								<input type="hidden" name="clave" value="<?php echo "$row[0]"; ?>">
								<input type="submit" class="input_aztualizar" value="Actualizar">
							</form>
						</td>
                        <td>$ <?php echo "$precioT"; ?>.00</td>
						<td>
							<form method="post" action="../quitar_producto_carrito.php">
							<input type="hidden" name="clave" value="<?php echo "$row[0]"; ?>">
								<input type="submit" value="Eliminar" class="boton-limpiar">
							</form>
						</td>
                      </tr>
                    <?php
					$precio=$row[3];
					$totalprecio=totalprecio+$precio;		
               }
               ?>
			   <tr>
			   	<td><b>Total</b></td>
				<td></td>
				<td></td>
				<td><a>$ <?php echo $total ?>.00</a></td>
				<td>
					<form  action="../pago.php">
						<input type="submit" value="Pagar" class="boton-agregar">
					</form>
				</td>
			   </tr>
                </table>
               <?php
             }					             												
			   }else{
					?>
					<a>CARRITO VACIO, POR FAVOR AGREGA TUS PRODUCTOS.</a><br><br>
					<input type="button" value="Agregar productos al carrito" class="boton-agregar" onClick="location.href='../catalogo.php'">
					<?php
			   }			   	
			?>		   
</div>

  </body>
</html>
