<?php 
session_start();

require 'admin/config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];
	$pass = hash('sha512', $pass);

	$conexion = conexion($bd_config);
	$statement = $conexion->prepare('SELECT * FROM usuario WHERE username=:usuario AND passw=:password');
	$statement->execute([
		':usuario' => $usuario,
		':password' => $pass
	]);

	$resultado = $statement->fetch();
	if ($resultado != false) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['type_user'] = $resultado['type_user'];
		header('Location: '.RUTA.'index.php');
		
	}else{
		$errores = '<small> Tu usuario o contraseña son incorrectos</small>';
	}
}

require 'views/login.view.php';

?>