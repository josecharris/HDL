<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';


  
   $id = rand(1,5000);
   $ciudad = $_POST['ciudad'];
   $departamento = $_POST['departamento'];

   $sql = "INSERT into destino values('$id','$ciudad','$departamento')";
   $result = mysqli_query($connection, $sql);  
    if (!$result) {
    die('Fallo registro');
    }

  echo "Destino registrado satisfactoriamente";  
?>