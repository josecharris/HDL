<?php
include ('Logic/connect.php');

if(isset($_GET['nombre'])){
	$nombre = $_GET['nombre'];
	$result = mysqli_query($connection,"SELECT * FROM cliente WHERE nombreCliente LIKE '%".$nombre."%' LIMIT 10");
	while($row = mysqli_fetch_array($result)){
		echo '<li onClick="fill_info('.$row['nitCliente'].');">'.$row['nombreCliente'].'</li>';
	}
}

if(isset($_GET['idreg'])){
	$idreg = $_GET['idreg'];
	$result = mysqli_query($connection,"SELECT * FROM cliente WHERE nitCliente='".$idreg."'");
	$row = mysqli_fetch_array($result);
	?>
	
	<div id="div_resp" class="card-body text-primary">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Cliente: &nbsp;</label>
                      <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombreCliente'] ?>" class="form-control col-sm-8"><br>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Nit: &nbsp;</label>
                      <input type="text" name="domicilio" id="domicilio" value="<?php echo $row['nitCliente'] ?>" class="form-control col-sm-8"><br>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Direccion &nbsp;</label>
                      <input type="text" name="correo" id="correo" value="<?php echo $row['direccionCliente'] ?>" class="form-control col-sm-8"><br>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Telefono: &nbsp;</label>
                      <input type="text" name="telefono" id="telefono" value="<?php echo $row['telefonoCliente'] ?>" class="form-control col-sm-8"><br>
                    </div>
                  </div>
	<?php
}
?>