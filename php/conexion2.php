<?php
$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "cosmeticos";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexi�n fallida: ".$conn->connect_error);
      }
?>
