<?php
	require('../../php/conexion2.php');
    $salida = "";

    $query = "SELECT * FROM pedidos WHERE usuario NOT LIKE '' ORDER By id_pedido LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM pedidos WHERE id_pedido LIKE '%$q%' OR usuario LIKE '%$q%' OR clave LIKE '%$q%' OR cantidad LIKE '%$q%' OR fecha LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>    					
    					<td>id pedido</td>
    					<td>usuario</td>
    					<td>clave</td>
    					<td>cantidad</td>
						<td>fecha</td>													
						<td></td>
    				</tr>

    			</thead>


    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr class='datos_finales'>    					
    					<td>".$fila['id_pedido']."</td>
    					<td>".$fila['usuario']."</td>
    					<td>".$fila['clave']."</td>
    					<td>".$fila['cantidad']."</td>
						<td>".$fila['fecha']."</td>														
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No hay ningun registro que concuerde con la busqueda deseada";
    }


    echo $salida;

    $conn->close();



?>
