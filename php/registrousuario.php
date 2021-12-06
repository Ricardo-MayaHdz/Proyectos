<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$correo=$_POST['correo'];

require 'conexion.php';
$con = conectar();

 $bus="SELECT * FROM usuarios WHERE usuario='".$usuario."'";
 $q =mysql_query($bus);
 if (mysql_result($q,0))
 {
   echo "<script type=\"text/javascript\">
             alert(\"El subnombre ya existe en la base de datos favor de ingresar otro subnombre de usuario\");
             window.location='../paginas/cliente/registro.php';
             </script>";
             mysqli_close($con);
}else{
  $insertar="INSERT INTO usuarios(usuario,nombre,apellido,contrasena,correo,tipo_usu) values('$usuario','$nombre','$apellido','$contra','$correo','')";
  $resultado=mysql_query($insertar)or die(mysql_error());
  echo "<script type=\"text/javascript\">
            alert(\"El usuario se registro en la base de datos... !!favor de ingresar para iniciar sesion\");
            window.location='../paginas/cliente/registro.php';
            </script>";  mysqli_close($con);
}
?>