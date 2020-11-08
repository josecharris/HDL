<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


   $id = uniqid();
   $placa = $_POST['placaV'];
   $tipo = $_POST['placaV'];
   $capacidad = $_POST['placaV'];

   $sql = "INSERT into vehiculo values('$id','$placa','$tipo','$capacidad')";
   $result = mysqli_query($connection, $sql);  
    if (!$result) {
    die('Fallo registro');
    }

  echo "Vehiculo registrado satisfactoriamente";  
?>