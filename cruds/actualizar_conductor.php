<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$cedula = $_POST['cedula'];
	$nombre_conductor = $_POST['nombre_conductor'];
	$ciudad_conductor = $_POST['ciudad_conductor'];
	$direccion_conductor = $_POST['direccion_conductor'];
	$telefono_conductor = $_POST['telefono_conductor'];


	$sqlb = "UPDATE conductor set nombreConductor = '" . $nombre_conductor."', ciudadConductor = '".$ciudad_conductor."', direccionResidencia = '".$direccion_conductor."', telefonoConductor = '". $telefono_conductor . "' where cedula = ".$cedula;

	if(mysqli_query($connection, $sqlb)){

        header('Location: '.RUTA.'index.php');
    }else{
    	echo "Error al actualizar.";
    }
      
}

if (empty($_SESSION['cedula'])) {
	$_SESSION['cedula'] = $_GET['cedula'];
}

//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if ($tipo == 'ADMINISTRADOR') {
	require '../views/conductor/update.view.php';
}else{
	header('Location: '.RUTA.'index.php');
}

?>