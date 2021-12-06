<?php
session_start();
$clave=$_POST['clave'];
$cantidad=$_POST['cantidad'];

require("../php/conexion.php");	
	$con=conectar(); 
    $cliente=$_SESSION['usuario'];
	
	$modificarcantidad="UPDATE `carrito` SET `cantidad`='".$cantidad."' WHERE `clave`= '".$clave."' AND usuario='".$cliente."';";
		$resultado=mysql_query($modificarcantidad)
		or die(mysql_error());
			echo "<script type=\"text/javascript\">
				 window.location='cliente/carrito.php';				
				</script>"; 	

?>