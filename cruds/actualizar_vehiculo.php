<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$placa = $_POST['placa'];
	$tipo_vehiculo = $_POST['tipo_vehiculo'];
	$capacidad_vehiculo = $_POST['capacidad_vehiculo'];
	$sqlb = "UPDATE vehiculo set placa = '". $placa . "', tipoVehiculo = '" . $tipo_vehiculo."', capacidadVehiculo = '".$capacidad_vehiculo."' where idVehiculo = ".$_SESSION['id_vehiculo'];

	if(mysqli_query($connection, $sqlb)){

        header('Location: '.RUTA.'index.php');
    }else{
    	echo "Error al actualizar.";
    }
      
}

//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if (empty($_SESSION['id_vehiculo'])) {
	$_SESSION['id_vehiculo'] = $_GET['id'];
}

if ($tipo == 'ADMINISTRADOR') {
	require '../views/vehiculo/update.view.php';
}else{
	header('Location: '.RUTA.'index.php');
}

?>