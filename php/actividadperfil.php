<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
session_start();
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contra=$_POST['contra'];
require 'conexion.php';
$con = conectar();
$cliente=$_SESSION['usuario'];

$modificacion="UPDATE usuarios SET usuario='$usuario',nombre='$nombre',apellido='$apellido',contrasena='$contra' WHERE usuario='$cliente'";
$resultado=mysql_query($modificacion,$con)
  or die("error al actualizar datos");
mysqli_close($con);
$_SESSION['usuario']=$usuario;
echo "<script type=\"text/javascript\">
          alert(\"los datos fueron actualizados de manera correcta..\");
          window.location='../paginas/catalogo.php';
          </script>";
?>
