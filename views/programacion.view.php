<?php

$usuario = $_SESSION['usuario'];
 require 'Logic/connect.php';
  $where = "";
  //$sql = "SELECT * FROM gpymc";
  //$result = mysqli_query($connection, $sql);
  if(!empty($_POST))
  {
    $valor = $_POST['campo'];
    $valor2 = $_POST['campo2'];
    if(!empty($valor) && !empty($valor2)){
      $where = "WHERE fechaP BETWEEN '$valor%' AND '$valor2%'";
    }
  }
  $sqlb = "SELECT * FROM programacion inner join conductor on programacion.fkConductor=conductor.cedula inner join vehiculo on programacion.fkVehiculo=vehiculo.idVehiculo $where ORDER BY fechaP ASC";
  $result = mysqli_query($connection, $sqlb);
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Programacion</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>

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
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-warehouse"></i>      
        </div>
        <div class="sidebar-brand-text mx-3">Inicio</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-shipping-fast"></i> 
          <span>GESTION LOGISTICA</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Cargue y Servicio
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Opciones</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Usuario Administrador:</h6>
            <a class="collapse-item" href="programacion.php">Programacion</a>
            <a class="collapse-item" href="orden.php">Orden cargue</a> 
            <a class="collapse-item" href="Graficos.php">Actualizar cargue</a>
            <a class="collapse-item" href="cards.html">Consultas vehiculos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Actualizacion de Informacion</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Modificar</h6>
            <a class="collapse-item" href="utilities-color.html">Vehiculo</a>
            <a class="collapse-item" href="utilities-border.html">Conductor</a>
            <a class="collapse-item" href="utilities-animation.html">Cliente</a>
            <a class="collapse-item" href="utilities-other.html">Otro</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administracion
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Control de documentos</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="login.html">Cargue</a>
            <a class="collapse-item" href="register.html">Servicio</a>
            <a class="collapse-item" href="forgot-password.html">Otros</a>
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Fletes</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Administracion de Usuarios</span></a>
      </li>
       <!-- Nav Item - Exit -->
      <li class="nav-item">
        <a class="nav-link" href='Logic/exit.php'>
          <i class="fas fa-fw fa-window-close"></i>
          <span>Salir</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h3 style="margin: 0 auto;">Administración de registros de programación</h3>
       </nav>
          <!-- Topbar Navbar -->
          
            <!-- Nav Item - Alerts -->
           
            <!-- Nav Item - User Information -->
            <div class="card" style="width: 80%; height: 15%; margin: 0 auto; margin-bottom: 1%; padding: 1%;">
              <p style="text-align: center;"><strong>Busqueda por fecha</strong></p>
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-3 my-md-0 mw-100 navbar-search" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="container-fluid">
                  <div class="row text-center">
                    <div class="col-5">
                      <div class="row">
                        <label style="margin-left: 10px;"><h6>Entre: </h6></label>
                        <input style="margin-left: 10px;" type="date" name="campo" id="campo">
                      </div>
                      
                      </div>
                    <div class="col-5">
                      <div class="row">
                        <label style="margin-left: 10px;"><h6>Hasta: </h6></label>
                        <input style="margin-left: 10px;" type="date" name="campo2" id="campo2">
                      </div>             
                    </div>
                    <div class="col-2" >
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          <i class="fas fa-search fa-sm">Buscar</i>
                        </button>
                      </div>
                    </div>
                  </div>
                                  
                </div>
              </form>
            </div>
            
          <div style="float: left; width: 75%;">
              <table class="table" style="width: 96%;">
                     <thead class="thead-dark">
                      <tr >
                       <th style="border: 1px solid white;">Placa Vehiculo</th> 
                      
                       <th style="border: 1px solid white;">Conductor</th> 
                       <th style="border: 1px solid white;">Destino</th>
                       <th style="border: 1px solid white;">Fecha</th> 
                       <th style="border: 1px solid white;">Orden</th> 

                      </thead>
                    <tbody>
                     <?php while($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                          
                          <td class="bg-primary" style="color: white;"><?php echo $row['placa']; ?></td>
                          
                           <td class="bg-success" style="color: white;"><?php echo $row['nombreConductor']; ?></td>
                          <td class="bg-warning" style="color: white;"><?php echo $row['destiny']; ?></td>
                          <td class="bg-danger" style="color: white;"><?php echo $row['fechaP']; ?></td>
                          <td><a href="orden.php?placa=<?php echo $row['placa'];?>&cedula=<?php echo $row['cedula'];?>&destino=<?php echo $row['destiny'];?>">Generar Orden<span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
            
                    <?php } ?>
                    </tbody>
              </table> 
          </div>
          <div>
            <div class="card" style="float: left; width: 20%; padding: 2%;">
                  <h5><strong>Programar Cargue</strong></h5><br>
                  <form method="POST">
                    <label><strong>Placa: </strong></label><br>
                    <input type="text" class="form-control"  name="placa">
                    <label><strong>Conductor: </strong></label> 
                    <input type="text" class="form-control"  name="conductor">
                    <label><strong>Ciudad destino:</strong></label> 
                    <input type="text" class="form-control"  name="destino">
                    <label><strong>Fecha:</strong></label> <input type="date" name="fechaViaje">
                    <br><br>
                    <button type="submit" class="btn btn-primary" formaction="agendarCargue.php">Guardar</button>
                  </form>
            </div>
            <br>
          </div>
          


          
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        

            <!-- Earnings (Monthly) Card Example -->
           

            <!-- Earnings (Monthly) Card Example -->
            
            <!-- Earnings (Monthly) Card Example -->
            

            <!-- Pending Requests Card Example -->
            

          <!-- Content Row -->

         
            <!-- Pie Chart -->
            

          <!-- Content Row -->
          
              <!-- Project Card Example -->
             

              <!-- Color System -->
              

            
      <!-- End of Main Content -->

      <!-- Footer -->
      
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
