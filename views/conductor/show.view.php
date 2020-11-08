<?php
  require '../Logic/connect.php';
  $sqlb = "SELECT * FROM conductor";
  $result = mysqli_query($connection, $sqlb);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listar conductor</title>
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
        	<div>
                <table class="table" style="margin-top: 30px;">
	                <thead class="thead-dark">
	                    <tr>
		                    <th style="border: 1px solid white;">Cedula</th>
		                    <th style="border: 1px solid white;">Nombre</th>
		                    <th style="border: 1px solid white;">Ciudad</th>
		                    <th style="border: 1px solid white;">Dirección</th>
		                    <th style="border: 1px solid white;">Teléfono</th>
		                    <th style="border: 1px solid white;">Operaciones</th>
		                </tr>
	                </thead>
	                <tbody>
	                     <?php while($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
	                        <tr>
	                          
	                          <td class="bg-primary" style="color: white;"><?php echo $row['cedula']; ?></td>                         
	                          <td class="bg-success" style="color: white;"><?php echo $row['nombreConductor']; ?></td>
	                          <td class="bg-warning" style="color: white;"><?php echo $row['ciudadConductor']; ?></td>
	                          <td class="bg-success" style="color: white;"><?php echo $row['direccionResidencia']; ?></td>
	                          <td class="bg-warning" style="color: white;"><?php echo $row['telefonoConductor']; ?></td>
	                          <td>
	                          	<a class="btn btn-primary btn-user" href="../cruds/actualizar_conductor.php?cedula=<?php echo $row['cedula']; ?>">Editar</a>
	                          	<a class="btn btn-danger btn-user" href="../cruds/eliminar_conductor.php?cedula=<?php echo $row['cedula']; ?>">Eliminar</a>
	                          </td>
	                        </tr>
	            
	                    <?php } ?>
	                </tbody>
                </table> 
                 <br>
                <center><h3>Ingresa informacion de nuevo conductor</h3></center>
                <form method="POST" action="crear_conductor.php">
                	<label>Cedula: &nbsp;&nbsp;</label><input type="text" name="cedula">
                	<label>&nbsp;Nombre: &nbsp;&nbsp;</label><input type="text" name="nombre">
                    <label>&nbsp;Ciudad: &nbsp;&nbsp;</label><input type="text" name="ciudad">
                    <br>
                    <label>&nbsp;Direccion Residencia: &nbsp;&nbsp;</label><input type="text" name="direccion">
                    <label>&nbsp;Telefono: &nbsp;&nbsp;</label><input type="text" name="telefono">
                	<button class="btn btn-success" type="submit">Crear Conductor</button>
                </form>
            </div>
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