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
	$sqlb = "delete from cliente where nitCliente =".$_GET['id'];

	if(mysqli_query($connection, $sqlb)){
		header('Location: '.RUTA.'index.php');
    }else{
    	echo "Error al eliminar.";
    }
}else{
	header('Location: '.RUTA.'index.php');
}

?>