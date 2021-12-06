<?php 
	ini_set('display_errors','off');
	ini_set('display_startup_errors','off');
	error_reporting(0);
	session_start();
	$usu=$_POST['usu'];
	
	require '../../php/conexion.php';
	$con=conectar();
	
	$eliminacion="DELETE FROM usuarios WHERE usuario='$usu'";
	mysql_query($eliminacion)
	or die(mysql_error());
	echo "<script type=\"text/javascript\">
            alert(\"Los  datos de cliente se ha eliminado de la base de datos exitosamente\");
			window.location='consulta_generalcliente.php';
            </script>";  
			mysqli_close($con);
?>