<?php
  require 'Logic/connect.php';
	
  $opt = $_REQUEST['opt'];
	$cedula = $_REQUEST['cedula'];

	if ($opt==1) {
	    $consulta= "SELECT * FROM conductor where cedula=".$cedula;
  		$result = mysqli_query($connection, $consulta);
  		$array_conductores = [];

  		while($row = $result->fetch_array(MYSQLI_ASSOC)) {
  			$n_cedula = $row['cedula'];
  			$nombre = $row['nombreConductor'];
  			$ciudad = $row['ciudadConductor'];
  			$direccion = $row['direccionResidencia'];
  			$telefono = $row['telefonoConductor'];

  			array_push($array_conductores,$n_cedula, $nombre, $ciudad, $direccion, $telefono);

  			echo json_encode($array_conductores);
  		}
	}

?>