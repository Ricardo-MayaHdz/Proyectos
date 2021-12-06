<?php
  ini_set('display_errors','off');
  ini_set('display_startup_errors','off');
  error_reporting(0);
	$usu=$_POST['usuario'];
?>
<html>
<head>
	<title>ELIMINACION</title>
	<link href="../../css/styletitulo.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    require '../../php/conexion.php';
	$con=conectar();

    $sql = "SELECT usuario,nombre,apellido,contrasena,correo FROM usuarios where usuario='$usu'";
    $result = mysql_query ($sql,$con);
      // verificamos que no haya error
      if (! $result){
         echo "La consulta SQL contiene errores.".mysql_error();
         exit();
      }else {
      //obtenemos los datos resultado de la consulta
	  		?>
	<br><br>
	<h2 class="h2tr">ELIMINACION DEL CLIENTE</h2>
	<br>
	<center><div class="linearoja"></div></center>
			<?php
		   while ($row = mysql_fetch_row($result)){
            ?>
			<form action="operacioneliminacioncliente.php" method="POST" autocomplete="off" class="form">                              
                      <table style="text-align:left; color:#0033FF;">
					  <tr>
                           <th>usuario:</th>
                           <th>
						   		<input type="text"  value="<?php echo "$row[0]"; ?>" name="cl" class="caja_textor" disabled="disabled">
								<input type="hidden"  value="<?php echo "$row[0]"; ?>" name="usu">
								</th>
                        </tr>
						<tr>
                           <th>nombre:</th>
                           <th><input type="text"  value="<?php echo "$row[1]"; ?>" name="titulo" class="caja_textor" disabled="disabled"></th>
                        </tr>

                        <tr>
                           <th>apellido:</th>
                           <th><input type="text"  value="<?php echo "$row[2]"; ?>" name="peso" class="caja_textor" disabled="disabled"></th>
                        </tr>
                        <tr>
                           <th>contrasena:</th>
                           <th><input type="text"  value="<?php echo "$row[3]"; ?>" name="tamano" class="caja_textor" disabled="disabled"></th>
                        </tr>
                        <tr>
                           <th>correo:</th>
                           <th><input type="text"  value="<?php echo "$row[4]"; ?>" name="tiempo" class="caja_textor" disabled="disabled"></th>
                        </tr>                                     
                      </table>   
					  <br><br>
					  <input type="submit" value="Eliminar cliente" class="boton-agregar"/>
					  <input  type="button" onClick=" location.href='consulta_generalcliente.php' " value="CANCELAR" class="boton-limpiar"/>                 
  	</form>
  <br>
  <center><div class="linearoja"></div></center>
       <?php
         }
       }
       ?>
</body>
</html>