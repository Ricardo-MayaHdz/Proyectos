<?php
  ini_set('display_errors','off');
  ini_set('display_startup_errors','off');
  error_reporting(0);
  session_start();
  
	$clave=$_POST['clave'];
	$titulo=$_POST['titulo'];
	$descripcion=$_POST['descripcion'];
	$cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];
	
	require '../../php/conexion.php';
	$con=conectar();
	
	$modificacion="UPDATE `productos` SET `titulo`='$titulo',`nombre`='$descripcion',`cantidad`='$cantidad',`precio`='$precio' WHERE `productos`.`clave` = '$clave'";
	mysql_query($modificacion)
	or die(mysql_error());
	echo "<script type=\"text/javascript\">
            alert(\"El producto se ha actualizado en la base de datos exitosamente\");
			window.location='consulta_general.php';
            </script>";  
			mysqli_close($con);
?>

