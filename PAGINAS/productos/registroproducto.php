<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

$clave=$_POST['clave'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$destino="../../imagenes/".$imagen;
copy($ruta,$destino);

require '../../php/conexion.php';
$con=conectar();

 $bus="SELECT * FROM productos WHERE clave='".$clave."'";
 $q =mysql_query($bus,$con);
 if (mysql_result($q,0))
 {
 	echo "<script type=\"text/javascript\">
            alert(\"La clave ingresada ya existe en la BD\");
			window.location='alta_producto.php';
            </script>";  
	mysqli_query($con);
 }else{
	$insertar="INSERT INTO productos(id_producto,clave,titulo,nombre,cantidad,precio,imagen) VALUES(NULL,'$clave','$titulo','$descripcion','$cantidad','$precio','$imagen')";
	mysql_query($insertar)
	or die(mysql_error());
echo "<script type=\"text/javascript\">
            alert(\"La refaccion se registro en la base de datos exitosamente\");
			window.location='alta_producto.php';
            </script>";  
			mysqli_close($con);
 }
?>