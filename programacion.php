<?php session_start();

require 'admin/config.php';

//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if ($tipo == 'ADMINISTRADOR') {
	require 'views/programacion.view.php';
}else{
	header('Location: '.RUTA.'index.php');
}

?>