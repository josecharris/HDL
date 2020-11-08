<?php

require '../Logic/connect.php';
require 'fpdf/fpdf.php';
$hoy = getdate();


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);


$pdf->Image('images/logohdl.jpg', 20, 5, 170 );
$pdf->Cell(30);
$pdf->Cell(125,70,'ORDEN DE CARGUE', 0, 0,'C');

$pdf->Ln(40);

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  
  $pdf->Cell(60,5,'FECHA: '.date("Y-m-d"),1,0,'C',1);
  $pdf->Cell(80,5,'',0,0,'C',0);
  $pdf->Cell(40,5,'HORA: ',1,0,'C',1);
$pdf->Ln(7);
$pdf->SetFillColor(150,150,150);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(180,6,'INFORMACION DEL VEHICULO Y CONDUCTOR',1,0,'C',1);
  $pdf->Ln(6);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  $pdf->Cell(50,4,'Placa Vehiculo: ',1,0,'C',1);
  $pdf->Cell(65,4,'Tipo Vehiculo: ',1,0,'C',1);
  $pdf->Cell(65,4,'Capacidad Carga: ',1,0,'C',1);
$pdf->Ln(4);
  $pdf->Cell(90,4,'Conductor: Jorge Armando Perez Abril',1,0,'C',1);
  $pdf->Cell(40,4,'Cedula: 1057595365',1,0,'C',1);
  $pdf->Cell(50,4,'Celular: 3124736118',1,0,'C',1);
  
  $pdf->Ln(6);
  $pdf->SetFillColor(150,150,150);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(180,6,'INFORMACION DE CARGUE Y DESCARGUE',1,0,'C',1);
  $pdf->Ln(10);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  $pdf->Cell(40,4,'',0,0,'C',0);
  $pdf->Cell(40,4,'',0,0,'C',0);
  $pdf->Cell(20,4,'',0,0,'C',0);
  $pdf->Cell(40,4,'VALOR FLETE A COBRAR ',1,0,'C',1);
  $pdf->Cell(40,4,'$',1,0,'C',1);
  $pdf->Ln(4);

  $pdf->Cell(40,4,'Sitio de cargue: ',1,0,'C',1);
  $pdf->Cell(40,4,'',1,0,'C',1);
  $pdf->Cell(20,4,'',0,0,'C',0);
  $pdf->Cell(40,4,'VALOR AUXILIAR ',1,0,'C',1);
  $pdf->Cell(40,4,'$',1,0,'C',1);

   $pdf->Ln(4);
  $pdf->Cell(40,4,'Sitio de descargue: ',1,0,'C',1);
  $pdf->Cell(40,4,'',1,0,'C',1);
  $pdf->Cell(20,4,'',0,0,'C',0);
  $pdf->Cell(40,4,'TOTAL SERVICIO',1,0,'C',1);
  $pdf->Cell(40,4,'$',1,0,'C',1);
   $pdf->Ln(4);
  $pdf->Cell(40,4,'',0,0,'C',0);
  $pdf->Cell(40,4,'',0,0,'C',0);
  $pdf->Cell(20,4,'',0,0,'C',0);
  $pdf->Cell(40,4,'VALOR FLETE A PAGAR',1,0,'C',1);
  $pdf->Cell(40,4,'$',1,0,'C',1);
  $pdf->Ln(8);
  
  $pdf->Cell(100,8,'OBSERVACIONES:',1,0,'C',1);
  
  $pdf->Cell(50,4,'N. ORDEN DE COMPRA',1,0,'C',1);
  $pdf->Cell(30,4,'',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(100,4,'',0,0,'C',0);
   $pdf->Cell(50,4,'CONTACTO',1,0,'C',1);
  $pdf->Cell(30,4,'',1,0,'C',1);
  $pdf->Ln(6);
  
  $pdf->SetFillColor(150,150,150);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(180,6,'INFORMACION DEL CLIENTE',1,0,'C',1);
  $pdf->Ln(6);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  $pdf->Cell(90,4,'Nombre: ',1,0,'C',1);
  $pdf->Cell(40,4,'NIT: ',1,0,'C',1);
  $pdf->Cell(50,4,'Telefono: ',1,0,'C',1);
  $pdf->Ln(4);
  
  $pdf->Cell(90,4,'Direccion: ',1,0,'C',1);
  $pdf->Cell(90,4,'Ciudad: ',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(90,4,'Tipo Agencia: ',1,0,'C',1);
  $pdf->Cell(90,4,'Correo: ',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(55,65,'Nombre Analista ---- ----', 0,0,'C');  
    

  $pdf->Image('images/sello.PNG', 15, 133, 48 );
   $pdf->Ln(4);
  $pdf->Cell(55,68,'ANALISTA DE OPERACIONES', 0,0,'C');  
     
$pdf->Output();

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