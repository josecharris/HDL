<?php 
$id = $_SESSION['id_vehiculo'];

$sqlb = "SELECT * FROM vehiculo where idVehiculo = ".$id;
$result = mysqli_query($connection, $sqlb);
$result = $result->fetch_array(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Actualizar vehículo</title>
		<!-- Custom fonts for this template-->
	  	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	  	<!-- Custom styles for this template-->
	  	<link href="../css/sb-admin-2.min.css" rel="stylesheet">

	  	<style type="text/css">   
	        .bg-gradient-primary {
	            background-color: #f6c23e;
	            background-image: linear-gradient(180deg,rgba(0,0,0,.9) 10%,#224abe 100%);
	            background-size: cover;
	        }
	  	</style>
	</head>
	<body id="page-top">
		<!-- Page Wrapper -->
	  <div id="wrapper">
	  	<?php include('../sidebar.template.php'); ?>

	  	<!-- Content Wrapper -->
	    <div id="content-wrapper" class="d-flex flex-column">

	      <!-- Main Content -->
	      <div id="content" style="width: 80%; margin: 0 auto;">
	      	<br>
	      	<h3 style="text-align: center;">Actualizar vehículo</h3>
	      	<form class="user" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	            <div class="form-group">
	            	<label for="">Placa</label>
	                <input type="text" class="form-control form-control-user" name="placa" value="<?php echo $result['placa']; ?>">
	            </div>
	            <div class="form-group">
	            	<label for="">Tipo de vehiculo</label>
	                <input type="text" class="form-control form-control-user" name="tipo_vehiculo" 
	                value="<?php echo $result['tipoVehiculo']; ?>">
	            </div>
	            <div class="form-group">
	            	<label for="">Capacidad del vehiculo</label>
	                <input type="text" class="form-control form-control-user" name="capacidad_vehiculo" 
	                value="<?php echo $result['capacidadVehiculo']; ?>">
	            </div>
	            <button type="submit" name="submit"  class="btn btn-primary btn-user btn-block">Actualizar</button>	                   
	        </form>
	      	
	      </div>
	  	</div>
	  </div>


	  <!-- Bootstrap core JavaScript-->
	  <script src="../vendor/jquery/jquery.min.js"></script>
	  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <!-- Core plugin JavaScript-->
	  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
	  <!-- Custom scripts for all pages-->
	  <script src="../js/sb-admin-2.min.js"></script>
	  <!-- Page level plugins -->
	  <script src="../vendor/chart.js/Chart.min.js"></script>
	  <!-- Page level custom scripts -->
	  <script src="../js/demo/chart-area-demo.js"></script>
	  <script src="../js/demo/chart-pie-demo.js"></script>
	</body>
</html>