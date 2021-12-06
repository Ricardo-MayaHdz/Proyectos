<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
require 'conexion.php';
$con = conectar();
session_start();
$cliente=$_SESSION['usuario'];
$query = "delete from usuarios where usuario= '$cliente'";
$result = mysql_query($query);
if (mysql_result($result,0))
{
  echo "<script type=\"text/javascript\">
              alert(\"Cuenta No eliminada\");
              window.location='../paginas/perfil.php';
              </script>";
}else {
  mysqli_close($con);
  session_destroy();
  echo "<script type=\"text/javascript\">
              alert(\"Cuenta eliminada\");
              window.location='../index.php';
              </script>";
}
?>
