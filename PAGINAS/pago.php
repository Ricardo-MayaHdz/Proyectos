<?php
	ini_set('display_errors','off');
	ini_set('display_startup_errors','off');
	error_reporting(0);
	session_start();
	
	$cliente=$_SESSION['usuario'];
	if ($_SESSION == null || $_SESSION == '') {
    ?>
    <style media="screen">
      .cerrar{
        display: none;
      }
    </style>
    <?php
  }else {
    ?>
    <style media="screen">
      .iniciar{
        display:none;
      }
    </style>
    <?php
  }
?>
<html>
<head>
	<title>PAGO PRODUCTOS</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
	<link href="../css/styletitulo.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="../index.php" class="hvr-underline-reveal"><b>INICIO</b></a></li>
        <li><a href="catalogo.php" class="hvr-underline-reveal"><b>PRODUCTOS</b></a></li>
      </ul>
		<div class="iniciar">
			<a href="registro.php" class="hvr-underline-reveal">INICIAR SESIÓN</a>		</div>
		<div class="cerrar">
			<a href="../php/cerrar_sesion.php" class="hvr-underline-reveal">CERRAR SESION</a>		</div>
    </div>
	<br><br><br><br>
	<div class="cuadro_tarjeta">
	<form action="../pdf/recibo.php">
	<a>Nombre del comprador: <b><?php echo "".$cliente?></b></a>			
	<br><br>
		<a class="titulo_tarjeta"><b>Datos de tu Tarjeta de credito</b></a>	
		<br><br>	
		<div class="datos_tarjeta">
			<img  src="../imagenes/tarjetacredito.png" width="200px" align="center"><br><br><br>
			<a><b>Nombre:</b></a><br><input type="text" required class="name_tarjeta"><br><br>
			<a><b>Numero de tarjeta:</b></a><br>
				<input type="text" maxlength="4" class="numero_tarjeta" required><a> - </a>
				<input type="text" maxlength="4" class="numero_tarjeta" required><a> - </a>
				<input type="text" maxlength="4" class="numero_tarjeta" required><a> - </a>
				<input type="text" maxlength="4" class="numero_tarjeta" required>
			<br><br>
			<a><b>Fecha de vencimiento:</b></a><br><br>
			<select class="lista">
				<option>MES</option>
				<option>ENERO</option>
				<option>FEBRERO</option>
				<option>MARZO</option>
				<option>ABRIL</option>
				<option>MAYO</option>
				<option>JUNIO</option>
				<option>JULIO</option>
				<option>AGOSTO</option>
				<option>SEPTIEMBRE</option>
				<option>OCTUBRE</option>
				<option>NOVIEMBRE</option>
				<option>DICIEMBRE</option>								
			</select>
			<select class="lista">
				<option>ANO</option>
				<option>2018</option>
				<option>2019</option>
				<option>2020</option>
				<option>2021</option>
				<option>2022</option>
				<option>2023</option>
				<option>2024</option>
				<option>2025</option>
				<option>2026</option>
				<option>2027</option>
				<option>2028</option>
				<option>2029</option>
				<option>2030</option>
			</select>
			<br><br>
			<a><b>cvc</b></a>
			<input type="text" maxlength="3" class="cvc" required><br><br><br>
			<input type="submit" value="Pagar" class="boton-agregar">
		</div>
		</form>
	</div>
</body>
</html>