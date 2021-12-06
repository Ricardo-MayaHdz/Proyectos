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
        <h2 class="h2t">ALTAS DE PRODUCTOS</h2><br>
		<center><div class="linea"></div></center>
    <form method="POST" action="registroproducto.php" enctype="multipart/form-data" autocomplete="off" class="form">
		<table style="text-align:left; color:#0033FF;">
		<tr>
			<th><a>clave:</a></th>
			<th><input type="text" name="clave" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>titulo:</a></th>
			<th><input type="text" name="titulo" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>descripcion del producto:</a></th>
			<th><input type="text" name="descripcion" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>cantidad:</a></th>
			<th><input type="text" name="cantidad" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>precio:</a></th>
			<th><input type="text" name="precio" required class="caja_texto"></th>
		</tr>
		<tr>
			<th><a>imagen:</a></th>
			<th><input type="file" name="imagen" id="imagen" required class="caja_texto"></th>
		</tr>
		</table><br><br>
		<input type="submit" value="Registrar producto" class="boton-agregar">
        <input  type="button" onClick=" location.href='consulta_general.php' " value="CANCELAR" class="boton-limpiar"/>         
    </form><br><br>
<center><div class="linea"></div></center>
</body>
</html>