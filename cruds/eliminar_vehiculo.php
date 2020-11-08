<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';



//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if ($tipo == 'ADMINISTRADOR') {
	$sqlb1 = "delete from programacion where fkVehiculo =".$_GET['id'];
	$sqlb2 = "delete from vehiculo where idVehiculo =".$_GET['id'];

	if(mysqli_query($connection, $sqlb1)){
		if(mysqli_query($connection, $sqlb2)){
	        header('Location: '.RUTA.'index.php');
	    }else{
	    	echo "Error al eliminar.";
	    }
    }else{
    	echo "Error al eliminar.";
    }
}else{
	header('Location: '.RUTA.'index.php');
}

?>