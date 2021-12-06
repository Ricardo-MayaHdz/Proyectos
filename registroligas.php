<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

$nombre_dueño=$_POST['nombre_dueño'];
$apellido_dueño=$_POST['apellido_dueño'];
$domicilio=$_POST['domicilio'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$nombre_liga=$_POST['nombre_liga'];
$nombre_corto_liga=$_POST['nombre_corto_liga'];
$domicilio_liga=$_POST['domicilio_liga'];
$patrocinador=$_POST['patrocinador'];

require '../../php/conexion.php';
$con=conectar();

 $bus="SELECT * FROM registroligas WHERE usuario='".$usuario."'";
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