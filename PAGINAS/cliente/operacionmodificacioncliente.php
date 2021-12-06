<?php
  ini_set('display_errors','off');
  ini_set('display_startup_errors','off');
  error_reporting(0);
  session_start();
  
	$usu=$_POST['usu'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$contra=$_POST['contra'];
	$correo=$_POST['correo'];
	
	require '../../php/conexion.php';
	$con=conectar();
	
	$modificacion="UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`contrasena`='$contra',`correo`='$correo' WHERE `usuarios`.`usuario` = '$usu'";
	mysql_query($modificacion)
	or die(mysql_error());
	echo "<script type=\"text/javascript\">
            alert(\"Los datos del usuario se han actualizado en la base de datos exitosamente\");
			window.location='consulta_generalcliente.php';
            </script>";  
			mysqli_close($con);
?>

