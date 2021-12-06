<?php
	require('../../php/conexion.php');
	$con=conectar();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
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
			border: 1px solid #00ff24;
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
		color:#009900;
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
		color:#00ff24;
		}
	</style>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Historial de pedidos realizados'
        },
        subtitle: {
            text: 'pedidos enviados y entregados'
        },
        xAxis: {
            categories: [
			<?php 
			$consulta=mysql_query("SELECT * FROM pedidos");
			while($res=mysql_fetch_array($consulta)){
			?>
			
			['<?php echo $res['4'] ?>'],
			
			<?php
			}
			?>			
			],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'cantidad de pedidos por dia',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: 'pedidos.'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#00ff24'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Año 2018',
            data: [
			<?php 
			
			$fecha=mysql_query("SELECT fecha FROM pedidos");
			
			$consulta=mysql_query("SELECT `cantidad` FROM `pedidos`");
			
			
			
			while($res=mysql_fetch_array($consulta)){
			?>
			[<?php echo $res['cantidad'];?>],
			<?php
			}
			?>],
        }]
    });
});
		</script>
	</head>
	<body>
	<section class="principal">
	<h2>BUSQUEDA DE PEDIDOS</h2>	
		<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="buscar"></input><br><br>
	<div id="datos">
	
	</div>
	
</section>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>
	
<script src="../../js/highcharts.js"></script>
<script src="../../js/exporting.js"></script>
 <!– <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
