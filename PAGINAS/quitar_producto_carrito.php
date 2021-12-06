<?php 
session_start();
$clave=$_POST['clave'];

require("../php/conexion.php");	
$con=conectar(); 
$cliente=$_SESSION['usuario'];

$eliminarproducto="DELETE FROM `carrito` WHERE `clave`='".$clave."' AND `usuario`='".$cliente."'";
		$resultado=mysql_query($eliminarproducto)
		or die(mysql_error());
			echo "<script type=\"text/javascript\">
				 window.location='cliente/carrito.php';				
				</script>"; 	

?>