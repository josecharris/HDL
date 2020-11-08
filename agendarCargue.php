<?php

  require 'Logic/connect.php';

  $idPrograma = uniqid();
  $placa = $_POST['placa'];
  
    $ciudadDes = $_POST['destino'];
 
  $conductor = $_POST['conductor'];
  $fechaViaje = $_POST['fechaViaje'];
  
  $idVehiculo = "SELECT idVehiculo FROM vehiculo WHERE placa='$placa'";
  $result2 = mysqli_query($connection, $idVehiculo);
  $row1 = $result2->fetch_array(MYSQLI_ASSOC); 
  $idVehi=$row1['idVehiculo'];

  

  $idConductor = "SELECT cedula FROM conductor WHERE nombreConductor='$conductor'";
  $result3 = mysqli_query($connection, $idConductor);
  $row2 = $result3->fetch_array(MYSQLI_ASSOC);
  $idCo=$row2['cedula'];
  $query = "INSERT into programacion VALUES ('$idPrograma', '$idCo', '$idVehi', '$fechaViaje','$ciudadDes')";
  $result = mysqli_query($connection, $query);


    //$showdes = "SELECT * FROM destino WHERE nombreConductor='$ciudadDes'";




  if (!$result) {
    die('Query Failed.');
  }

  echo "Cargue Programado";  


  //$sql = "INSERT INTO admin (id, username, passw) VALUES ('$id', '$usuario', '$clave')";
	//$resultado = $mysqli->query($sql);

?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($result) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>