<?php
	require('../php/conexion.php');
	$conn=conectar();
	
	$salida = "";
    $query = "SELECT * FROM productos WHERE clave NOT LIKE '' ORDER By id_producto LIMIT 25";
    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM productos WHERE id_producto LIKE '%$q%' OR clave LIKE '%$q%' OR titulo LIKE '%$q%' ";
    }
    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>clave</td>
    					<td>titulo</td>
							<td>nombre</td>
							<td>cantidad</td>
							<td>precio</td>
							<td>imagen</td>
							<td><form action='nuevoproducto.php' method='post'><input type='submit' value='Nuevo'></form></td>
							<td></td>
    				</tr>

    			</thead>


    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['clave']."</td>
    					<td>".$fila['titulo']."</td>					
							<td>".$fila['nombre']."</td>
							<td>".$fila['cantidad']."</td>
							<td>".$fila['precio']."</td>
							<td>".$fila['imagen']."</td>
							<td><form action='modificarproducto.php' method='post'><input type='submit' value='MODIFICAR'></form></td>
							<td><form action='eliminarproducto.php' method='post'><input type='submit' value='ELIMINAR'></form></td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No hay ningun registro que concuerde con la busqueda deseada";
    }


    echo $salida;

    $conn->close();



?>
