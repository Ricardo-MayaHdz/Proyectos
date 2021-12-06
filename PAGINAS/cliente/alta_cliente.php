<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
    <link href="../../css/styletitulo.css" rel="stylesheet" type="text/css">
</head>
<body><br><br><a href="../productos"></a>
        <h2 class="h2t">ALTAS DE CLIENTE</h2><br>
		<center><div class="linea"></div></center>
    <form method="POST" action="registrocliente.php" enctype="multipart/form-data" autocomplete="off" class="form">
		<table style="text-align:left; color:#00ff24;">
		<tr>
			<th><a>Nombre:</a></th>
			<th><input type="text" name="nombre" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>apellidos:</a></th>
			<th><input type="text" name="apellido" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>sub nombre (usuario):</a></th>
			<th><input type="text" name="usuario" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>contrasena:</a></th>
			<th><input type="text" name="contra" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>correo:</a></th>
			<th><input type="text" name="correo" required class="caja_texto"></th>
		</tr>		
		</table><br><br>
		<input type="submit" value="Registrar cliente" class="boton-agregar">
        <input  type="button" onClick=" location.href='consulta_generalcliente.php' " value="CANCELAR" class="boton-limpiar"/>         
    </form><br><br>
<center><div class="linea"></div></center>
</body>
</html>