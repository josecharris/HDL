<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRO</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Custom fonts for this template-->
  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crea una cuenta!</h1>
              </div>
              <form class="user" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	                <div class="form-group row">
	                  <div class="col-sm-6 mb-3 mb-sm-0">
	                    <input type="text" class="form-control form-control-user" name="cedula" id="cedula" placeholder="Cedula">
	                  </div>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control form-control-user" name="cargo" id="cargo" placeholder="Cargo">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Usuario">
	                </div>
	                <div class="form-group row">
	                  <div class="col-sm-6 mb-3 mb-sm-0">
	                    <input type="password" class="form-control form-control-user" name="passw" id="passw" placeholder="Contraseña">
	                  </div>
	                  <div class="col-sm-6">
	                    <input type="password" class="form-control form-control-user" name="repeat_passw" id="repeat_passw" placeholder="Repetir contraseña">
	                  </div>
                    
	                </div>
	                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
	                  Register Account
	                </button>
	                <hr>
                  <?php if(!empty($errores)): ?>
                    <ul>
                      <?php echo $errores; ?>
                    </ul>
                  <?php endif; ?>
	                <a href="index.html" class="btn btn-google btn-user btn-block">
	                  <i class="fab fa-google fa-fw"></i> Register with Google
	                </a>
	                <a href="index.html" class="btn btn-facebook btn-user btn-block">
	                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
	                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
              	<a href="<?php echo RUTA. 'login.php' ?>" class="small">¿Ya tienes cuenta? ¡Login!</a>
              </div>
            </div>
          </div>
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

</body>
</html>