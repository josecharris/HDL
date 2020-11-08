<?php  

session_start();

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$cedula = limpiarDatos ($_POST['cedula']);
	$cargo = limpiarDatos ($_POST['cargo']);
	$usuario = limpiarDatos ($_POST['username']);
	$pass = limpiarDatos ($_POST['passw']);
	$pass_repeat = limpiarDatos ($_POST['repeat_passw']);

	$errores = '';

	//validar campos de texto
	if (empty($usuario) || empty($pass) || empty($cedula) || empty($cargo) || empty($pass_repeat)) {
		$errores = '<small>Por favor llene los campos requeridos.</small>';
	}else{
		//Validacion de que el usuario no exista.
		$conexion = conexion($bd_config);
		$statement = $conexion->prepare('SELECT * FROM usuario WHERE username = :usuario LIMIT 1');
		$statement->execute([
			':usuario' => $usuario
		]);
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li>Este usuario ya existe</li>';
		}
	}

	if($pass != $pass_repeat){
		$errores .= '<li>Las contraseñas deben coincidir.</li>';
	}

	if ($errores == '') {
		$conexion = conexion($bd_config);
		$pass = hash('sha512', $pass);
		$statement = $conexion->prepare("INSERT INTO usuario (username, passw, cedula, cargo ,type_user) VALUES (:usuario, :pass, :cedula, :cargo, :type)");
		$statement->execute([
			':usuario'=>$usuario,
			':pass'=> $pass,
			':cedula' => $cedula,
			':cargo' => $cargo,
			':type'=> 'USUARIO'
		]);

		header('Location: '.RUTA.'login.php');	
	}
}

require 'views/registro.view.php';

?>