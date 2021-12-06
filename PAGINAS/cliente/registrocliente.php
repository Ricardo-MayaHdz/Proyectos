<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$correo=$_POST['correo'];

require '../../php/conexion.php';
$con=conectar();

 $bus="SELECT * FROM usuarios WHERE usuario='".$usuario."'";
 $q =mysql_query($bus,$con);
 if (mysql_result($q,0))
 {
   echo "<script type=\"text/javascript\">
             alert(\"El subnombre ya existe en la base de datos favor de ingresar otro subnombre de usuario\");
             window.location='alta_cliente.php';
             </script>";
             mysqli_close($con);
}else{
  $insertar="INSERT INTO usuarios(id_usuario,usuario,nombre,apellido,contrasena,correo) values(NULL,'$usuario','$nombre','$apellido','$contra','$correo')";
  $resultado=mysql_query($insertar)
  or die(mysql_error());
  echo "<script type=\"text/javascript\">
            alert(\"El cliente se registro en la base de datos...\");
            window.location='consulta_generalcliente.php';
            </script>";  mysqli_close($con);
}
?>