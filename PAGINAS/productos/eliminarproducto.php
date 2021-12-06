<?php
  ini_set('display_errors','off');
  ini_set('display_startup_errors','off');
  error_reporting(0);
	$clave=$_POST['clave'];
?>
<html>
<head>
	<title>Modificar datos</title>
	<link href="../../css/styletitulo.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    require '../../php/conexion.php';
	$con=conectar();

    $sql = "SELECT clave,titulo,nombre,cantidad,precio,imagen FROM productos where clave=".$clave."";
    $result = mysql_query ($sql,$con);
      // verificamos que no haya error
      if (! $result){
         echo "La consulta SQL contiene errores.".mysql_error();
         exit();
      }else {
      //obtenemos los datos resultado de la consulta
	  		?>
	<br><br>
	<h2 class="h2tr">ELIMINACION DEL PRODUCTO</h2>
	<br>
	<center><div class="linearoja"></div></center>
			<?php
		   while ($row = mysql_fetch_row($result)){
            ?>
			<form action="operacioneliminacionproducto.php" method="POST" autocomplete="off" class="form">                              
                      <table style="text-align:left; color:#0033FF;">
					  <tr>
                           <th>clave:</th>
                           <th>
						   		<input type="text"  value="<?php echo "$row[0]"; ?>" name="cl" class="caja_textor" disabled="disabled">
								<input type="hidden"  value="<?php echo "$row[0]"; ?>" name="clave">
								</th>
                        </tr>
						<tr>
                           <th>titulo:</th>
                           <th><input type="text"  value="<?php echo "$row[1]"; ?>" name="titulo" class="caja_textor" disabled="disabled"></th>
                        </tr>

						<tr>
                           <th>descripcion:</th>
                           <th><input type="text"  value="<?php echo "$row[2]"; ?>" name="descripcion" class="caja_textor" disabled="disabled"></th>
                        </tr>
						<tr>
                           <th>cantidad:</th>
                           <th><input type="text"  value="<?php echo "$row[3]"; ?>" name="cantidad" class="caja_textor" disabled="disabled"></th>
                        </tr>
						<tr>
                           <th>precio:</th>
                           <th><input type="text"  value="<?php echo "$row[4]"; ?>" name="precio" class="caja_textor" disabled="disabled"></th>
                        </tr>					                    
                      </table>   
					  <br><br>
					  <input type="submit" value="Eliminar producto" class="boton-agregar"/>
					  <input  type="button" onClick=" location.href='consulta_general.php' " value="CANCELAR" class="boton-limpiar"/>                 
  	</form>
  <br>
  <center><div class="linearoja"></div></center>
       <?php
         }
       }
       ?>
</body>
</html>