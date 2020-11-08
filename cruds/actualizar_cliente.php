<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nit_cliente = $_POST['nit_cliente'];
	$nombre_cliente = $_POST['nombre_cliente'];
	$telefono_cliente = $_POST['telefono_cliente'];
	$direccion_cliente = $_POST['direccion_cliente'];


	$sqlb = "UPDATE cliente set nombreCliente = '". $nombre_cliente . "', telefonoCliente = '" . $telefono_cliente."', direccionCliente = '".$direccion_cliente."' where nitCliente = ".$nit_cliente ;

	if(mysqli_query($connection, $sqlb)){

        header('Location: '.RUTA.'index.php');
    }else{
    	echo "Error al actualizar.";
    }
      
}

if (empty($_SESSION['nit'])) {
	$_SESSION['nit'] = $_GET['id'];
}


//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if ($tipo == 'ADMINISTRADOR') {
	require '../views/cliente/update.view.php';
}else{
	header('Location: '.RUTA.'index.php');
}

?>