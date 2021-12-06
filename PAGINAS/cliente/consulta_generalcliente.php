<!DOCTYPE html>
<html>
<head>
	<title>DATATABLES</title>
	<link href="../../css/styletitulo.css">
	<style>
	table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}
	table td {
			transition: all .5s;			
		}
		
		/* Table */
	.tabla_datos {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}
	.tabla_datos th, 
		.tabla_datos td {
			border: 1px solid #66CC99;
			padding: 2px 7px;
		}
	.tabla_datos caption {
			margin: 7px;
		}
		
		/* Table Body */
	.tabla_datos tbody td {
			color: #353535;
		}
		.tabla_datos tbody td:first-child,
		.tabla_datos tbody td:nth-child(4),
		.tabla_datos tbody td:last-child {
			text-align: right;
		}

		.tabla_datos tbody tr:nth-child(odd) td {
			background-color: #EAFDFF;
		}
		.tabla_datos tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			cursor:pointer;			
		}

		/* Table Footer */
		.tabla_datos tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.tabla_datos tfoot th:first-child {
			text-align: left;
		}		
		#titulo{
		text-align:center;
		color:#27b33a;
		font-family:"Times New Roman", Times, serif;
		font-size:16px;		
		}
		.nuevo{
			cursor:pointer;
			padding:8px 17px;
			border:solid 1px #0000FF;
			background:#008CBA;
			color:#FFFFFF;
			transition:all 0.6s;
		}
		.nuevo:hover{
			background:	#fff;	
			color:#008CBA;
		}
		.eliminar{
			cursor:pointer;
			background: #FF5B60;
			border:solid 1px #f44336;
			color:#FFFFFF;
			padding:8px 17px;
			transition:all 0.6s;
		}
		.eliminar:hover{
			background:#FFFFFF;
			color:#f44336;
		}
		.modificar{
			cursor:pointer;
			background: #4CAF50;
			border:solid 1px  #009900;
			color:#FFFFFF;
			padding:8px 17px;
			transition:all 0.6s;
		}
		.modificar:hover{
			background:#FFFFFF;
			color:#4CAF50;
		}
		#caja_busqueda{
		outline:none;
		color:#00ff24;
		width:80%;
		padding:6px;
		border: none;
	    border-bottom: 2px solid #00ff24;
		margin-left:10px;
		transition:all 0.6s;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:16px;
		}
		h2{
		text-align:center;
		color:#009900;
		}
	</style>
</head>
<body>
<section class="principal">
	<h2>BUSQUEDA DE CLIENTES</h2>	
		<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="buscar"></input><br><br>
	<div id="datos">
	
	</div>
	
</section>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
