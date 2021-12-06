<?php
	session_start();
	$clave=$_POST['clave'];
	$cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];
	$nombre=$_POST['nombre_producto'];
	$hoy = date("Y-m-d");
	
	require("../php/conexion.php");	
	$con=conectar(); 
    $cliente=$_SESSION['usuario'];
	
	if($cliente==''){
		echo "<script type=\"text/javascript\">
				alert(\"DEBES INICIAR SESION PARA PODER AGREGAR A CARRITO.\");
				 window.location='./catalogo.php';				
				</script>"; 
	}else{
	$validarproducto="SELECT cantidad FROM `carrito` WHERE clave='".$clave."' AND usuario='".$cliente."'";
	$res=mysql_query($validarproducto,$con);
	$row = mysql_fetch_row($res);
	$cantidadbd=$row[0];
	if (mysql_result($res,0))
 	{
		$cantidadbd=$cantidadbd+$cantidad;
		$modificarcantidad="UPDATE `carrito` SET `cantidad`=$cantidadbd WHERE clave='".$clave."' AND usuario='".$cliente."'";
		$resultado=mysql_query($modificarcantidad)
		or die(mysql_error());
			echo "<script type=\"text/javascript\">
				alert(\"HAS AGREGADO OTROS $cantidad PRODUCTOS MAS AL PRODUCTO YA AGREGADO ANTERIORMENTE AL CARRITO.\");
				 window.location='./catalogo.php';				
				</script>"; 	
	}else{
		$insertar="INSERT INTO carrito(id_carrito,usuario,clave,nombre_producto,cantidad,precio,fecha) values(NULL,'$cliente','$clave','$nombre','$cantidad','$precio','$hoy')";
		  $resultado=mysql_query($insertar)
		  or die(mysql_error());
		  echo "<script type=\"text/javascript\">
            alert(\"Agregado a carrito\");
            window.location='./catalogo.php';
            </script>";  mysqli_close($con);
	}			
	}
?>