<?php
	require('../../php/conexion2.php');
    $salida = "";

    $query = "SELECT * FROM usuarios WHERE usuario NOT LIKE '' ORDER By id_usuario LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM usuarios WHERE id_usuario LIKE '%$q%' OR usuario LIKE '%$q%' OR nombre LIKE '%$q%' OR apellido LIKE '%$q%' OR contrasena LIKE '%$q%' OR correo LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>    					
    					<td>usuario</td>
    					<td>nombre</td>
    					<td>apellidos</td>
    					<td>contrasena</td>
						<td>correo</td>							
						<td><form action='alta_cliente.php' method='post'><input type='submit' value='Nuevo' class='nuevo'></form></td>
						<td></td>
    				</tr>

    			</thead>


    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr class='datos_finales'>    					
    					<td>".$fila['usuario']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['apellido']."</td>
    					<td>".$fila['contrasena']."</td>
						<td>".$fila['correo']."</td>							
							<td><form action='modificarusuario.php' method='post'><input type='hidden' value=".$fila['usuario']." name='usu'><input type='submit' value='modificar' class='modificar'></form></td>
							<td><form action='eliminarcliente.php' method='post'><input type='hidden' value=".$fila['usuario']." name='usuario'><input type='submit' value='eliminar' class='eliminar'></form></td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No hay ningun registro que concuerde con la busqueda deseada";
    }


    echo $salida;

    $conn->close();



?>
