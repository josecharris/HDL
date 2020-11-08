<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


  
   $cedula = $_POST['cedula'];
   $nombre = $_POST['nombre'];
   $ciudad = $_POST['ciudad'];
   $direccion = $_POST['direccion'];
   $telefono = $_POST['telefono'];

   $sql = "INSERT into conductor values('$cedula','$nombre','$ciudad','$direccion','$telefono')";
   $result = mysqli_query($connection, $sql);  
    if (!$result) {
    die('Fallo registro');
    }

  echo "Conductor registrado satisfactoriamente";  
?>