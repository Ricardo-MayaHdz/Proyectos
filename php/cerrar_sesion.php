<?php
session_start();
require 'conexion.php';
$con = conectar();
$cliente=$_SESSION['usuario'];

$limpiar="DELETE FROM `carrito` WHERE `usuario`='$cliente'";
$q =mysql_query($limpiar,$con);
if (session_destroy()) {
  echo "<script type=\"text/javascript\">
            alert(\"sesion cerrada\");
            window.location='../paginas/catalogo.php';
            </script>";
} else {
  echo "<script type=\"text/javascript\">
            alert(\"sesion NO cerrada\");
            window.location='../paginas/catalogo.php';
            </script>";
};
?>
