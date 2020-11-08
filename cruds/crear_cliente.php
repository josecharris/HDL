<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


   
   $nit = $_POST['nit'];
   $nombre = $_POST['nombre'];
   $telefono = $_POST['telefono'];
   $direccion = $_POST['direccion'];

   $sql = "INSERT into cliente values('$nit','$nombre','$telefono','$direccion')";
   $result = mysqli_query($connection, $sql);  
    if (!$result) {
    die('Fallo registro');
    }

  echo "Vehiculo registrado satisfactoriamente";  
?>