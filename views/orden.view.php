<?php 
  require 'Logic/connect.php';
  $placa = $_GET['placa'];
  $cedulaConductor = $_GET['cedula'];
  $destino = $_GET['destino'];

  $consulta= "SELECT tipoVehiculo, capacidadVehiculo FROM vehiculo where placa=".$placa;
  $result = mysqli_query($connection, $consulta);
  $extraido= mysqli_fetch_array($result);

  $consulta2= "SELECT * FROM conductor where cedula='".$cedulaConductor."'";
  $result2 = mysqli_query($connection, $consulta2);
  $row = mysqli_fetch_array($result2);

  $consulta3= "SELECT * FROM destino where ciudadDestino='".$destino."'";
  $result3 = mysqli_query($connection, $consulta3);
  $row2 = mysqli_fetch_array($result3);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Funciones Financieras</title>
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript">
    function Buscador(){
  var xmlhttp = false;
  try{
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e){
    try{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E){
      xmlhttp = false;
    }
  }
  if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function lookup(nombre){
  div = document.getElementById('suggestions');
  if(nombre.length == 0){
    $('#suggestions').hide();
  }else{
    elem = Buscador();
    elem.open("GET","rcp.php?nombre="+nombre); //se llama archivo rcp
    elem.onreadystatechange=function(){
      if(elem.readyState == 4){
        $('#suggestions').show();
        div.innerHTML = elem.responseText;
      }
    }
    elem.send(null)
  }
}

function fill_info(idreg){
  document.getElementById('id_reg').value = idreg;
  document.getElementById('busqueda').value = '';
  setTimeout("$('#suggestions').hide();", 200);
  document.getElementById('busqueda').focus();
  carga_info();
}

function carga_info(){
  idregistro = document.getElementById('id_reg').value;
  div = document.getElementById('div_resp');
  ajax = Buscador();
  ajax.open("GET","rcp.php?idreg="+idregistro);
  ajax.onreadystatechange = function(){
    if (ajax.readyState == 4){
      div.innerHTML = ajax.responseText;
    }
  }
  ajax.send(null)
}



  </script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <style type="text/css">

    @charset "utf-8";

.suggestionsBox{
  position: relative;
  width: 20%;
  margin: 10px 0px 0px 0px;
  background-color: #212427;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
  border: 2px solid #000;
  color: #fff;
  cursor: pointer;
}

.suggestionList{
  margin: 0px;
  padding: 0px;
}

.suggestionList li{
  margin: 0px 0px 3px 0px;
  padding: 3px;
  cursor: pointer;
}

.suggestionList li:hover{
  background-color: #659CD8;
}

    .bg-gradient-primary {
      background-color: #f6c23e;
      background-image: linear-gradient(180deg,rgba(0,0,0,.9) 10%,#224abe 100%);
      background-size: cover;
    }


    .opciones{
      background-color: #27ae607d;
      width: 250px;
      height: 600px;
      float: left;
    }
  </style>
<script>
  


</script>
</head>
<body>

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
          <span>GESTION LOGISTICA</span></a>
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
            <!--a class="collapse-item" href="nuevo.php">Nuevo Egresado Posgrado</a-->
            <a class="collapse-item" href="OrdenCargue.php">Orden cargue</a>

            <a class="collapse-item" href="cards.html">Consultas</a>
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

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
          
            <!-- Nav Item - Messages -->
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>


        <table class="table" columns="3"> 
          <tr>
            <td>
              <div class="card border-primary mb-3" style="max-width: 24rem; height: 390px;">
              <form name="form1" id="form1" enctype="multipart/form-data">
                   <div style="">
        <input type="text" name="busqueda" id="busqueda" onKeyUp="lookup(this.value);" placeholder="Buscar Cliente">
        <div class="suggestionsBox" id="suggestions" style="display:none;"> <!-- div para imprimir resultados -->
          <div class="suggestionList" id="autoSuggestionsList"></div>
        </div>
      </div>
      
      <!--Este campo se llenará al seleccionar un item de la lista -->
      <input type="hidden" name="id_reg" id="id_reg">
                <div class="card-header">Informacion Cliente</div>
                  <div id="div_resp" class="card-body text-primary">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Cliente: &nbsp;</label>
                      <input type="text" name="nombre" id="nombre" class="form-control col-sm-8"><br>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Nit: &nbsp;</label>
                      <input type="text" name="domicilio" id="domicilio" class="form-control col-sm-8"><br>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Direccion &nbsp;</label>
                      <input type="text" name="correo" id="correo" class="form-control col-sm-8"><br>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Telefono: &nbsp;</label>
                      <input type="text" name="telefono" id="telefono" class="form-control col-sm-8"><br>
                    </div>
                  </div>
                
              </div>
            </td>
            <td>
              <div class="card border-secondary mb-3" style="max-width: 24rem;height: 390px;">
                <div class="card-header">Informacion Tipo Servicio</div>
                <div class="card-body text-secondary">
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tipo cargue: &nbsp;</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="slc_tipo_servicio">
                        <option value="default">- Seleccione -</option>
                      </select>
                    </div>
                  </div>      
                  
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Ciudad flete: &nbsp;</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="slc_ciudad_flete">
                        <option value="default">- Seleccione -</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Servicio: &nbsp;</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="slc_servicio">
                        <option value="default">- Seleccione -</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Valor servicio: &nbsp;</label>
                    <input type="text" name="valor_servicio" class="form-control col-sm-7">
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Valor terceros: &nbsp;</label>
                    <input type="text" name="valor_terceros" class="form-control col-sm-7">
                  </div>
                </div>
              </div>
            </td>
            <td>
             <div class="card border-primary mb-3" style="max-width: 24rem;height: 390px;">
                <div class="card-header">Informacion Conductor</div>
                  <div class="card-body text-primary">
                     <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Cédula conductor &nbsp;</label>
                      <div class="col-sm-6">                  
                        <input type="text" name="conductor_cedula" id="conductor_cedula" class="form-control" 
                        value="<?php echo $row['cedula'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Nombre/apellido: &nbsp;</label>
                      <div class="col-sm-6">
                        <input type="text" name="conductor_nombre" id="conductor_nombre" class="form-control" 
                        value="<?php echo $row['nombreConductor'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Ciudad origen: &nbsp;</label>
                      <div class="col-sm-6">
                        <input type="text" name="slc_conductor_ciudad" id="conductor_ciudad" class="form-control" 
                        value="<?php echo $row['ciudadConductor'];?>" readonly>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Dirección residencia: &nbsp;</label>
                      <div class="col-sm-6">
                        <input type="text" name="conductor_residencia" id="conductor_residencia" class="form-control" 
                        value="<?php echo $row['direccionResidencia'];?>" readonly>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Número celular: &nbsp;</label>
                      <div class="col-sm-6">
                        <input type="text" name="conductor_celular" id="conductor_celular" class="form-control" 
                        value="<?php echo $row['telefonoConductor'];?>" readonly>
                      </div>
                    </div> 
                  </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="card border-success mb-3" style="max-width: 22rem;height: 250px;">
                <div class="card-header">Informacion Vehiculo</div>
                <div class="card-body text-success">
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Placa No. &nbsp;</label>
                    <div class="col-sm-6">
                      <input type="text" name="numero_placa" id="numero_placa" class="form-control" readonly
                      value="<?php echo $_GET['placa'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Tipo vehiculo: &nbsp;</label>
                    <div class="col-sm-6">
                      <input type="text" name="tipo_vehiculo" id="tipo_vehiculo" class="form-control" readonly
                      value="<?php echo $extraido['tipoVehiculo'] ?>">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Capacidad carga: &nbsp;</label>
                    <div class="col-sm-6">
                      <input type="text" name="capacidad_carga" id="capacidad_carga" class="form-control" readonly
                      value="<?php echo $extraido['capacidadVehiculo'] ?>">
                    </div>
                  </div> 
                </div>
              </div>
            </td>
            <td>
              <div class="card border-secondary mb-3" style="max-width: 22rem;height: 250px;">
                <div class="card-header">Informacion Envio Origen</div>
                  <div class="card-body text-secondary">
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Tipo agencia: &nbsp;</label>
                      <div class="col-sm-6">
                        <select class="form-control" id="slc_tipo_agencia">
                          <option value="default">- Seleccione -</option>
                        </select>
                      </div>    
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Origen: &nbsp;</label><br>
                      <div class="col-sm-6">
                        <select class="form-control" id="slc_origen">
                          <option value="default">- Seleccione -</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>


              
            </td>
            <td>
              
              <div class="card border-success mb-3" style="max-width: 22rem;height: 250px;">
                <div class="card-header">Informacion Envio Destino</div>
                <div class="card-body text-success">
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Ciudad envío: &nbsp;</label>
                    <div class="col-sm-6">
                      <input type="text" name="ciudad_envio" id="ciudad_envio" class="form-control" 
                        value="<?php echo $row2['ciudadDestino'];?>" readonly>
                    </div>    
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Departamento: &nbsp;</label><br>
                    <div class="col-sm-6">
                      <input type="text" name="ciudad_envio" id="departamento_envio" class="form-control" 
                        value="<?php echo $row2['departamentoDestino'];?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="card border-secondary mb-3" style="max-width: 23rem;">
                <div class="card-header">Informacion Autorización Planilla de Cargue</div>
                  <div class="card-body text-secondary">
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Despachado por: &nbsp;</label>
                      <div class="col-sm-6">
                        <select class="form-control" id="slc_despachado">
                          <option value="default">- Seleccione -</option>
                        </select>
                      </div>    
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Autorizado por: &nbsp;</label><br>
                      <div class="col-sm-6">
                        <select class="form-control" id="slc_autorizado">
                          <option value="default">- Seleccione -</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>

            </td>
            
          </tr>
          <center>
           <button type="submit" class="btn btn-outline-success" formaction="pdf/certificado.php">
            <i class="fas fa-print"></i>
               Generar
             </button>
           </center>
            </form>
        </table>
   
        <script type="text/javascript" src="default.js"></script>
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
        <script src="js/app/app.js"></script>
</body>
</html>