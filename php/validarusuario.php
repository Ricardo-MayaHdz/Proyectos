<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
session_start();
$usu = $_POST['usuario'];
$contra = $_POST['contra'];

require 'conexion.php';

$con = conectar();
$bus="SELECT * FROM usuarios WHERE usuario='".$usu."'AND contrasena ='".$contra."'";
$q =mysql_query($bus,$con);
$tipo_usu="SELECT tipo_usu FROM usuarios WHERE usuario='".$usu."'AND contrasena ='".$contra."'AND tipo_usu='administrador'";
$r=mysql_query($tipo_usu,$con);
try{
  if (mysql_result($q,0))
  {
    $result=mysql_result($q,0);
    if (mysql_result($r,0)) {
        $_SESSION['usuario'] = $usu; //Guardo el nombre del usuario en sesion
      echo "<script type=\"text/javascript\">
                  alert(\"administrador\");
                  window.location='../paginas/paginaprincipalad.php';
                  </script>";
    }else{
      $_SESSION['usuario'] = $usu; //Guardo el nombre del usuario en sesion
      echo "<script type=\"text/javascript\">
                    window.location='../paginas/catalogo.php';
                  </script>";
    }
  }else
    echo "<script type=\"text/javascript\">
              alert(\"usuario no registrado en la base de datos\");
              window.location='../paginas/cliente/registro.php';
              </script>";
  }catch(exception $error){}
    mysql_close($con);
?>
