<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "hdl";
$connection = mysqli_connect($host,$user,$pass,$db);

if($connection){
   echo "";
}else{
	echo "Fail";
}

?>