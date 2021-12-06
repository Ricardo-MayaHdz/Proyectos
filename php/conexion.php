<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cosmeticos";

    $conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }
function conectar()
{
  $link=mysql_connect('localhost','root','','cosmeticos');
    if(!$link)
    {
      exit();
    }else {
    }
    if(!mysql_select_db("cosmeticos",$link))
    {
      exit();
    }else {    
    }
    return $link;
}
?>

