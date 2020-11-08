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
	$sqlb1 = "delete from programacion where fkConductor =".$_GET['cedula'];
	$sqlb2 = "delete from conductor where cedula =".$_GET['cedula'];

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