<?php
$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "ligasdefutbol";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexi�n fallida: ".$conn->connect_error);
      }
?>
