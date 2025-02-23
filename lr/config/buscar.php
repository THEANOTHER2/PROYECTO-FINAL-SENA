<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "lr";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM cliente ORDER By id ";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT id,nombre,correo,telefono,direccion,sexo,fecha_nac FROM cliente WHERE id LIKE '%" .$q."%' OR nombre LIKE '%" .$q."%' OR correo LIKE '%" .$q."%' OR telefono LIKE '%" .$q."%' OR direccion LIKE '%" .$q."%' OR sexo LIKE '%" .$q."%' OR fecha_nac LIKE '%" .$q."%' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='tabla_datos table table-striped'>
    			<thead>
    				<tr id='titulo'>
    					<th>ID</th>
    					<th>NOMBRE</th>
    					<th>CORREO</th>
    					<th>TELEFONO</th>
    					<th>DIRECCION</th>
                        <th>SEXO</th>
                        <th>FECHA NACIMIENTO</th>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['correo']."</td>
                        <td>".$fila['telefono']."</td>
                        <td>".$fila['direccion']."</td>
    				    <td>".$fila['sexo']."</td>
                        <td>".$fila['fecha_nac']."</td>
                    </tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>