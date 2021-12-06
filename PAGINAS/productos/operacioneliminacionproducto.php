<?php 
	ini_set('display_errors','off');
	ini_set('display_startup_errors','off');
	error_reporting(0);
	session_start();
	$clave=$_POST['clave'];
	
	require '../../php/conexion.php';
	$con=conectar();
	
	$eliminacion="DELETE FROM productos WHERE clave='$clave'";
	mysql_query($eliminacion)
	or die(mysql_error());
	echo "<script type=\"text/javascript\">
            alert(\"El producto se ha eliminado de la base de datos exitosamente\");
			window.location='consulta_general.php';
            </script>";  
			mysqli_close($con);
?>