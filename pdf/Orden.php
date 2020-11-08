<?php

require '../Logic/connect.php';
require 'fpdf/fpdf.php';


$fechaOrden = "";
if(isset($_POST['fechaOrden'])){
  $fechaOrden = $_POST['fechaOrden'];
}else{
  $fechaOrden = "";
}
$tipoOrden = "";
if(isset($_POST['tipoOrden'])){
  $tipoOrden = $_POST['tipoOrden'];
}else{
  $tipoOrden = "";
}
$especialidad = "";
if(isset($_POST['especialidad'])){
  $especialidad = $_POST['especialidad'];
}else{
  $especialidad = "";
}
$observaOrden = "";
if(isset($_POST['observaOrden'])){
  $observaOrden = $_POST['observaOrden'];
}else{
  $observaOrden = "";
}





$identificacion = $_GET['identificacion'];
$sql = "SELECT * FROM paciente WHERE identificacion = '$identificacion'";

$result = mysqli_query($connection, $sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$sqlFirma = "SELECT firma.firma, firma.firmaNombre from firma inner join paciente on firma.idPaciente=paciente.identificacion WHERE paciente.identificacion LIKE '$identificacion%'"; 
$result4 = mysqli_query($connection, $sqlFirma);
$row3 = $result4->fetch_array(MYSQLI_ASSOC);

$sqlVinc = "SELECT * from archivos inner join paciente on archivos.idUser=paciente.identificacion WHERE paciente.identificacion LIKE '$identificacion%'"; 
$result3 = mysqli_query($connection, $sqlVinc);
$row2 = $result3->fetch_array(MYSQLI_ASSOC);



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);


$pdf->Image('images/logou.jpg', 40, 5, 130 );

$pdf->Cell(30);
$pdf->Cell(120,45,'ORDEN MEDICA', 0, 0,'C');
$pdf->Ln(10);


$pdf->Ln(22);

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  $pdf->Cell(90,4,'PACIENTE: '.$row['primerNombre']." ".$row['segundoNombre']." ".$row['primerApellido']." ".$row['segundoApellido'],1,0,'C',1);
  $pdf->Cell(40,4,'GENERO: '.$row['genero'],1,0,'C',1);
  $pdf->Cell(50,4,$row['tipoIdentificacion'],1,0,'C',1);
$pdf->Ln(4);
  $pdf->Cell(60,4,'N. IDENTIFICACION: '.$row['identificacion'],1,0,'C',1);
  $pdf->Cell(80,4,'FECHA NACIMIENTO: '.$row['fecha'],1,0,'C',1);
  $pdf->Cell(40,4,'EDAD: '.$row['edad'],1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(120,4,'INSTITUCION ADMINISTRADORA: '.$row2['IA'],1,0,'C',1);
  $pdf->Cell(60,4,'TIPO PLAN: '.$row2['tipoPlan'],1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(60,4,'TIPO VINCULACION: '.$row2['tipoVinculacion'],1,0,'C',1);
  $pdf->Cell(60,4,'JORNADA TRABAJO: '.$row2['jornada'],1,0,'C',1);
  $pdf->Cell(60,4,'FECHA: '.date("Y-m-d"),1,0,'C',1);
  $pdf->Ln(5);
  $pdf->Cell(60,4,'TIPO ORDEN: '.$tipoOrden,1,0,'C',1);
  $pdf->Cell(60,4,'ESPECIALIDAD: '.$especialidad,1,0,'C',1);
  $pdf->Cell(60,4,'FECHA ORDEN: '.$fechaOrden,1,0,'C',1);
  $pdf->Ln(5);
$pdf->Cell(180,12,'OBSERVACIONES: '.$observaOrden,1,0,'C',1);
 $pdf->Ln(5);
$pdf->Cell(65,30,'FUNCIONARIO RESPONSABLE', 0,0,'C'); 
 $pdf->Image('images/sello.PNG', 15, 86, 48 );
 $pdf->Ln(3);

 $pdf->Cell(75,95,'DERLY JOHANA BAYONA MALDONADO', 0,0,'C');  

 $pdf->Ln(3);
 $pdf->Cell(75,97,'Medicina especializada, Medicina del trabajo', 0,0,'C');  
  $pdf->Ln(3);
 $pdf->Cell(75,100,'Registro Profesional:1054/2019', 0,0,'C');  



$pdf->Output();

echo $identificacion;
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        #canvasDiv{
            position: relative;
            border: 2px dashed grey;
            height:300px;
        }
    </style>
</head>

<body>
	<h1>Hola</h1>
    <label for="identificacion" class="col-sm-2 control-label">Identificacion</label>
          <div id="h" class="col-sm-10">
           <input type="text" name="">
          </div>
</body>

</html>