<?php

require '../Logic/connect.php';
require 'fpdf/fpdf.php';
$hoy = getdate();
$identificacion = $_GET['identificacion'];
$NingunaR = "";
if(isset($_POST['NingunaR'])){
   $NingunaR = $_POST['NingunaR'];
}else{
  $NingunaR = "";
}
$RESP = "";
if(isset($_POST['RESP'])){
  $RESP = $_POST['RESP'];
}else{
  $RESP = "";
}
$CMM = "";
if(isset($_POST['CMM'])){
  $CMM = $_POST['CMM'];
}else{
  $CMM = "";
}
$CEV = "";
if(isset($_POST['CEV'])){
  $CEV = $_POST['CEV'];
}else{
  $CEV = "";
}
$IAF = "";
if(isset($_POST['IAF'])){
  $IAF = $_POST['IAF'];
}else{
  $IAF = "";
}
$ST = "";
if(isset($_POST['ST'])){
  $ST = $_POST['ST'];
}else{
  $ST = "";
}
$RCA = "";
if(isset($_POST['RCA'])){
  $RCA = $_POST['RCA'];
}else{
  $RCA = "";
}
$CPYN = "";
if(isset($_POST['CPYN'])){
  $CPYN = $_POST['CPYN'];
}else{
  $CPYN = "";
}
$OtrosRec = "";
if(isset($_POST['OtrosRec'])){
  $OtrosRec = $_POST['OtrosRec'];
}else{
  $OtrosRec = "";
}


$NingunaR2 = "";
if(isset($_POST['NingunaR2'])){
   $NingunaR2 = $_POST['NingunaR2'];
}else{
  $NingunaR2 = "";
}
$CalfOr = "";
if(isset($_POST['CalfOr'])){
  $CalfOr = $_POST['CalfOr'];
}else{
  $CalfOr = "";
}
$rCarg = "";
if(isset($_POST['rCarg'])){
  $rCarg = $_POST['rCarg'];
}else{
  $rCarg = "";
}
$SPA = "";
if(isset($_POST['SPA'])){
  $SPA = $_POST['SPA'];
}else{
  $SPA = "";
}
$IPVE = "";
if(isset($_POST['IPVE'])){
  $IPVE = $_POST['IPVE'];
}else{
  $IPVE = "";
}
$UEPP = "";
if(isset($_POST['UEPP'])){
  $UEPP = $_POST['UEPP'];
}else{
  $UEPP = "";
}
$PE = "";
if(isset($_POST['PE'])){
  $PE = $_POST['PE'];
}else{
  $PE = "";
}
$PA = "";
if(isset($_POST['PA'])){
  $PA = $_POST['PA'];
}else{
  $PA = "";
}
$UCV = "";
if(isset($_POST['UCV'])){
  $UCV = $_POST['UCV'];
}else{
  $UCV = "";
}
$UDBS = "";
if(isset($_POST['UDBS'])){
  $UDBS = $_POST['UDBS'];
}else{
  $UDBS = "";
}
$OtrosRec2 = "";
if(isset($_POST['OtrosRec2'])){
  $OtrosRec2 = $_POST['OtrosRec2'];
}else{
  $OtrosRec2 = "";
}



$NA = "";
if(isset($_POST['NA'])){
   $NA = $_POST['NA'];
}else{
  $NA = "";
}
$TEA = "";
if(isset($_POST['TEA'])){
  $TEA = $_POST['TEA'];
}else{
  $TEA = "";
}
$TEA2 = "";
if(isset($_POST['TEA2'])){
  $TEA2 = $_POST['TEA2'];
}else{
  $TEA2 = "";
}
$TAH = "";
if(isset($_POST['TAH'])){
  $TAH = $_POST['TAH'];
}else{
  $TAH = "";
}
$TTB = "";
if(isset($_POST['TTB'])){
  $TTB = $_POST['TTB'];
}else{
  $TTB = "";
}
$TTA = "";
if(isset($_POST['TTA'])){
  $TTA = $_POST['TTA'];
}else{
  $TTA = "";
}
$TRE = "";
if(isset($_POST['TRE'])){
  $TRE = $_POST['TRE'];
}else{
  $TRE = "";
}
$TEC = "";
if(isset($_POST['TEC'])){
  $TEC = $_POST['TEC'];
}else{
  $TEC = "";
}
$PCV = "";
if(isset($_POST['PCV'])){
  $PCV = $_POST['PCV'];
}else{
  $PCV = "";
}
$MA = "";
if(isset($_POST['MA'])){
  $MA = $_POST['MA'];
}else{
  $MA = "";
}
$car = "";
if(isset($_POST['car'])){
  $car = $_POST['car'];
}else{
  $car = "";
}
$via = "";
if(isset($_POST['via'])){
  $via = $_POST['via'];
}else{
  $via = "";
}
$otr = "";
if(isset($_POST['otr'])){
  $otr = $_POST['otr'];
}else{
  $otr = "";
}


$tex = "";
if(isset($_POST['tex'])){
  $tex = $_POST['tex'];
}else{
  $tex = "";
}
$CSRPC = "";
if(isset($_POST['CSRPC'])){
  $CSRPC = $_POST['CSRPC'];
}else{
  $CSRPC = "";
}
$CCRPC = "";
if(isset($_POST['CCRPC'])){
  $CCRPC = $_POST['CCRPC'];
}else{
  $CCRPC = "";
}
$Aplazado = "";
if(isset($_POST['Aplazado'])){
  $Aplazado = $_POST['Aplazado'];
}else{
  $Aplazado = "";
}
$SRPMA = "";
if(isset($_POST['SRPMA'])){
  $SRPMA = $_POST['SRPMA'];
}else{
  $SRPMA = "";
}
$SRPTA = "";
if(isset($_POST['SRPTA'])){
  $SRPTA = $_POST['SRPTA'];
}else{
  $SRPTA = "";
}
$SRPTE = "";
if(isset($_POST['SRPTE'])){
  $SRPTE = $_POST['SRPTE'];
}else{
  $SRPTE = "";
}
$SRPTETE = "";
if(isset($_POST['SRPTETE'])){
  $SRPTETE = $_POST['SRPTETE'];
}else{
  $SRPTETE = "";
}
$espConfi = "";
if(isset($_POST['espConfi'])){
  $espConfi = $_POST['espConfi'];
}else{
  $espConfi = "";
}
$operMaqui = "";
if(isset($_POST['operMaqui'])){
  $operMaqui = $_POST['operMaqui'];
}else{
  $operMaqui = "";
}
$reubica = "";
if(isset($_POST['reubica'])){
  $reubica = $_POST['reubica'];
}else{
  $reubica = "";
}
$RNV = "";
if(isset($_POST['RNV'])){
  $RNV = $_POST['RNV'];
}else{
  $RNV = "";
}
$satisfac = "";
if(isset($_POST['satisfac'])){
  $satisfac = $_POST['satisfac'];
}else{
  $satisfac = "";
}
$EOC = "";
if(isset($_POST['EOC'])){
  $EOC = $_POST['EOC'];
}else{
  $EOC = "";
}
$SINRES = "";
if(isset($_POST['SINRES'])){
  $SINRES = $_POST['SINRES'];
}else{
  $SINRES = "";
}
$SDEL = "";
if(isset($_POST['SDEL'])){
  $SDEL = $_POST['SDEL'];
}else{
  $SDEL = "";
}
$PatoloEPS = "";
if(isset($_POST['PatoloEPS'])){
  $PatoloEPS = $_POST['PatoloEPS'];
}else{
  $PatoloEPS = "";
}
$Secuela = "";
if(isset($_POST['Secuela'])){
  $Secuela = $_POST['Secuela'];
}else{
  $Secuela = "";
}


$EF = "";
if(isset($_POST['EF'])){
  $EF = $_POST['EF'];
}else{
  $EF = "";
}
$Osteo = "";
if(isset($_POST['Osteo'])){
  $Osteo = $_POST['Osteo'];
}else{
  $Osteo = "";
}
$Audi = "";
if(isset($_POST['Audi'])){
  $Audi = $_POST['Audi'];
}else{
  $Audi = "";
}
$Opto = "";
if(isset($_POST['Opto'])){
  $Opto = $_POST['Opto'];
}else{
  $Opto = "";
}$Espi = "";
if(isset($_POST['Espi'])){
  $Espi = $_POST['Espi'];
}else{
  $Espi = "";
}
$Visio = "";
if(isset($_POST['Visio'])){
  $Visio = $_POST['Visio'];
}else{
  $Visio = "";
}
$RXTOR = "";
if(isset($_POST['RXTOR'])){
  $RXTOR = $_POST['RXTOR'];
}else{
  $RXTOR = "";
}
$lumSac = "";
if(isset($_POST['lumSac'])){
  $lumSac = $_POST['lumSac'];
}else{
  $lumSac = "";
}$CUAH = "";
if(isset($_POST['CUAH'])){
  $CUAH = $_POST['CUAH'];
}else{
  $CUAH = "";
}
$GLI = "";
if(isset($_POST['GLI'])){
  $GLI = $_POST['GLI'];
}else{
  $GLI = "";
}
$ECARD = "";
if(isset($_POST['ECARD'])){
  $ECARD = $_POST['ECARD'];
}else{
  $ECARD = "";
}
$POR = "";
if(isset($_POST['POR'])){
  $POR = $_POST['POR'];
}else{
  $POR = "";
}$pLip = "";
if(isset($_POST['pLip'])){
  $pLip = $_POST['pLip'];
}else{
  $pLip = "";
}
$pHep = "";
if(isset($_POST['pHep'])){
  $pHep = $_POST['pHep'];
}else{
  $pHep = "";
}
$pRen = "";
if(isset($_POST['pRen'])){
  $pRen = $_POST['pRen'];
}else{
  $pRen = "";
}
$FROTSP = "";
if(isset($_POST['FROTSP'])){
  $FROTSP = $_POST['FROTSP'];
}else{
  $FROTSP = "";
}$hemoCLASI = "";
if(isset($_POST['hemoCLASI'])){
  $hemoCLASI = $_POST['hemoCLASI'];
}else{
  $hemoCLASI = "";
}
$Espermog = "";
if(isset($_POST['Espermog'])){
  $Espermog = $_POST['Espermog'];
}else{
  $Espermog = "";
}
$tsh2 = "";
if(isset($_POST['tsh2'])){
  $tsh2 = $_POST['tsh2'];
}else{
  $tsh2 = "";
}
$ser = "";
if(isset($_POST['ser'])){
  $ser = $_POST['ser'];
}else{
  $ser = "";
}$aUc = "";
if(isset($_POST['aUc'])){
  $aUc = $_POST['aUc'];
}else{
  $aUc = "";
}
$tDrogas = "";
if(isset($_POST['tDrogas'])){
  $tDrogas = $_POST['tDrogas'];
}else{
  $tDrogas = "";
}
$alco = "";
if(isset($_POST['alco'])){
  $alco = $_POST['alco'];
}else{
  $alco = "";
}
$colin2 = "";
if(isset($_POST['colin2'])){
  $colin2 = $_POST['colin2'];
}else{
  $colin2 = "";
}$froFAR = "";
if(isset($_POST['froFAR'])){
  $froFAR = $_POST['froFAR'];
}else{
  $froFAR = "";
}
$kun = "";
if(isset($_POST['kun'])){
  $kun = $_POST['kun'];
}else{
  $kun = "";
}
$copro = "";
if(isset($_POST['copro'])){
  $copro = $_POST['copro'];
}else{
  $copro = "";
}
$baci = "";
if(isset($_POST['baci'])){
  $baci = $_POST['baci'];
}else{
  $baci = "";
}
$evNe = "";
if(isset($_POST['evNe'])){
  $evNe = $_POST['evNe'];
}else{
  $evNe = "";
}
$ot = "";
if(isset($_POST['ot'])){
  $ot = $_POST['ot'];
}else{
  $ot = "";
}

$observRec = "";
if(isset($_POST['observRec'])){
  $observRec = $_POST['observRec'];
}else{
  $observRec = "";
}





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
$pdf->Image('images/logou.jpg', 40, 5, 110 );
$pdf->Cell(30);
$pdf->Cell(120,37,'CERTIFICADO MEDICO OCUPACIONAL', 0, 0,'C');

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
  $pdf->Cell(120,4,'EMPRESA CONTRATANTE: '.$row2['EmprContratante'],1,0,'C',1);
  $pdf->Cell(60,4,'TIPO EXAMEN: '.$row2['tipoExamen'],1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(60,4,'CARGO: '.$row2['cargoDesem'],1,0,'C',1);
  $pdf->Cell(60,4,'JORNADA TRABAJO: '.$row2['jornada'],1,0,'C',1);
  $pdf->Cell(60,4,'FECHA: '.date("Y-m-d"),1,0,'C',1);
  $pdf->Ln(5);
  $pdf->SetFillColor(150,150,150);
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(180,6,'CONCEPTO MEDICO OCUPACIONAL',1,0,'C',1);
  $pdf->Ln(6);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  $pdf->Cell(120,4,'1. RECOMENDACIONES GENERALES',1,0,'C',1);
  $pdf->Cell(5,4,$NingunaR,1,0,'C',1);
  $pdf->Cell(55,4,'Ninguna',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$RESP,1,0,'C',1);
  $pdf->Cell(55,4,'1.1 Remision a EPS',1,0,'C',1);
  $pdf->Cell(5,4,$CMM,1,0,'C',1);
  $pdf->Cell(55,4,'1.2 Continuar manejo medico',1,0,'C',1);
  $pdf->Cell(5,4,$CEV,1,0,'C',1);
  $pdf->Cell(55,4,'1.3 Completar esquema vacunacion',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$IAF,1,0,'C',1);
  $pdf->Cell(55,4,'1.4 Iniciar/Continuar actividad fisica',1,0,'C',1);
  $pdf->Cell(5,4,$ST,1,0,'C',1);
  $pdf->Cell(55,4,'1.5 Suspender tabaquismo',1,0,'C',1);
  $pdf->Cell(5,4,$RCA,1,0,'C',1);
  $pdf->Cell(55,4,'1.6 Reducir consumo de alcohol',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$CPYN,1,0,'C',1);
  $pdf->Cell(55,4,'1.7 Control de peso y nutricion',1,0,'C',1);
  $pdf->Cell(5,4,$OtrosRec,1,0,'C',1);
  $pdf->Cell(55,4,'1.8 Otras',1,0,'C',1);
  $pdf->Cell(5,4,'',1,0,'C',1);
  $pdf->Cell(55,4,'',1,0,'C',1);
  $pdf->Ln(4);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',7);
  $pdf->Cell(120,4,'2. RECOMENDACIONES OCUPACIONALES',1,0,'C',1);
  $pdf->Cell(5,4,$NingunaR2,1,0,'C',1);
  $pdf->Cell(55,4,'Ninguna',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$CalfOr,1,0,'C',1);
  $pdf->Cell(55,4,'2.1 Calificacion de origen',1,0,'C',1);
  $pdf->Cell(5,4,$rCarg,1,0,'C',1);
  $pdf->Cell(55,4,'2.2 Recomendaciones para manejo de cargas',1,0,'C',1);
  $pdf->Cell(5,4,$SPA,1,0,'C',1);
  $pdf->Cell(55,4,'2.3 Seguimiento por ARL',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$IPVE,1,0,'C',1);
  $pdf->Cell(55,4,'2.4 Ingreso programa vigilancia epidemio.',1,0,'C',1);
  $pdf->Cell(5,4,$UEPP,1,0,'C',1);
  $pdf->Cell(55,4,'2.5 Uso elementos de proteccion personal',1,0,'C',1);
  $pdf->Cell(5,4,$PE,1,0,'C',1);
  $pdf->Cell(55,4,'2.6 Pautas ergonomicas',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$PA,1,0,'C',1);
  $pdf->Cell(55,4,'2.7 Pausas activas',1,0,'C',1);
  $pdf->Cell(5,4,$UCV,1,0,'C',1);
  $pdf->Cell(55,4,'2.8 Uso de correccion visual',1,0,'C',1);
  $pdf->Cell(5,4,$UDBS,1,0,'C',1);
  $pdf->Cell(55,4,'2.9 Uso diario de bloqueador solar',1,0,'C',1);
  $pdf->Ln(4);
  $pdf->Cell(5,4,$OtrosRec2,1,0,'C',1);
  $pdf->Cell(55,4,'2.10 Otros',1,0,'C',1);
   $pdf->Ln(6);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(120,6,'3. RESTRICCIONES',1,0,'C',1);
  $pdf->SetFont('Arial','B',7);
  $pdf->Cell(5,6,$NA,1,0,'C',1);
  $pdf->Cell(55,6,'No aplica',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$TEA,1,0,'C',1);
  $pdf->Cell(55,6,'3.1 Trabajo en alturas > 1.5 mts',1,0,'C',1);
  $pdf->Cell(5,6,$TEA2,1,0,'C',1);
  $pdf->Cell(55,6,'3.2 Trabajo en altitudes > 2.500 mts',1,0,'C',1);
  $pdf->Cell(5,6,$TAH,1,0,'C',1);
  $pdf->Cell(55,6,'3.3 Trabajo en ambientes hiperbaricos',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$TTB,1,0,'C',1);
  $pdf->Cell(55,6,'3.4 Trabajo en temperaturas bajas',1,0,'C',1);
  $pdf->Cell(5,6,$TTA,1,0,'C',1);
  $pdf->Cell(55,6,'3.5 Trabajo en temperaturas altas',1,0,'C',1);
  $pdf->Cell(5,6,$TRE,1,0,'C',1);
  $pdf->Cell(55,6,'3.6 Trabajos con riesgo electrico',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$TEC,1,0,'C',1);
  $pdf->Cell(55,6,'3.7 Trabajo en espacios confinados',1,0,'C',1);
  $pdf->Cell(5,6,$PCV,1,0,'C',1);
  $pdf->Cell(55,6,'3.8 Para conduccion de vehiculos',1,0,'C',1);
  $pdf->Cell(5,6,$MA,1,0,'C',1);
  $pdf->Cell(55,6,'3.9 Manipulacion de alimentos',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$car,1,0,'C',1);
  $pdf->Cell(55,6,'3.10 Cargas',1,0,'C',1);
  $pdf->Cell(5,6,$via,1,0,'C',1);
  $pdf->Cell(55,6,'3.11 Viajes',1,0,'C',1);
  $pdf->Cell(5,6,$otr,1,0,'C',1);
  $pdf->Cell(55,6,'3.12 Otros',1,0,'C',1);
  $pdf->Ln(8);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(120,6,'4. CONCEPTO MEDICO',1,0,'C',1);
 $pdf->SetFont('Arial','B',7);
  $pdf->Cell(35,6,'TIPO EXAMEN',1,0,'C',1);
  $pdf->Cell(25,6,$tex,1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$CSRPC,1,0,'C',1);
  $pdf->Cell(55,6,'Concepto sin restricciones para el cargo',1,0,'C',1);
  $pdf->Cell(5,6,$CCRPC,1,0,'C',1);
  $pdf->Cell(55,6,'Concepto con restricciones para el cargo',1,0,'C',1);
  $pdf->Cell(5,6,$Aplazado,1,0,'C',1);
  $pdf->Cell(55,6,'Aplazado',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$SRPMA,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restricciones para manipulacion de alimen.',1,0,'C',1);
  $pdf->Cell(5,6,$SRPTA,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restricciones para trabajo en alturas',1,0,'C',1);
  $pdf->Cell(5,6,$SRPTE,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restricciones para trabajo electrico',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$SRPTETE,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restricciones temperaturas extremas',1,0,'C',1);
  $pdf->Cell(5,6,$espConfi,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restricciones espacios confinados',1,0,'C',1);
  $pdf->Cell(5,6,$operMaqui,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restricciones operacion de maquinaria',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$reubica,1,0,'C',1);
  $pdf->Cell(55,6,'Requiere evaluar reubicacion laboral',1,0,'C',1);
  $pdf->Cell(5,6,$RNV,1,0,'C',1);
  $pdf->Cell(55,6,'Requiere nueva valoracion',1,0,'C',1);
  $pdf->Cell(5,6,$satisfac,1,0,'C',1);
  $pdf->Cell(55,6,'Satisfactorio',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$EOC,1,0,'C',1);
  $pdf->Cell(55,6,'Enfermedades de origen comun',1,0,'C',1);
  $pdf->Cell(5,6,$SINRES,1,0,'C',1);
  $pdf->Cell(55,6,'Sin restriccion para continuar labor actual',1,0,'C',1);
  $pdf->Cell(5,6,$SDEL,1,0,'C',1);
  $pdf->Cell(55,6,'Sin diagnostico de enfermedad laboral',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$PatoloEPS,1,0,'C',1);
  $pdf->Cell(55,6,'Requiere calificacion de origen EPS/ARL',1,0,'C',1);
  $pdf->Cell(5,6,$Secuela,1,0,'C',1);
  $pdf->Cell(55,6,'Secuela de accidente de trabajo',1,0,'C',1);
   $pdf->Ln(8);
   $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  $pdf->Cell(120,6,'5. EXAMENES MEDICOS',1,0,'C',1);
 
  $pdf->Cell(35,6,'EXAMEN FISICO',1,0,'C',1);
  $pdf->Cell(25,6,$EF,1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(5,6,$Osteo,1,0,'C',1);
  $pdf->Cell(31,6,'E.F. osteomuscular',1,0,'C',1);
  $pdf->Cell(5,6,$Audi,1,0,'C',1);
  $pdf->Cell(31,6,'Audiometria',1,0,'C',1);
  $pdf->Cell(5,6,$Opto,1,0,'C',1);
  $pdf->Cell(31,6,'Optometria',1,0,'C',1);
   $pdf->Cell(5,6,$Espi,1,0,'C',1);
  $pdf->Cell(31,6,'Espirometria',1,0,'C',1);
  $pdf->Cell(5,6,$Visio,1,0,'C',1);
  $pdf->Cell(31,6,'Visiometria',1,0,'C',1);
   $pdf->Ln(6);
  $pdf->Cell(5,6,$RXTOR,1,0,'C',1);
  $pdf->Cell(31,6,'Rx Torax',1,0,'C',1);
  $pdf->Cell(5,6,$lumSac,1,0,'C',1);
  $pdf->Cell(31,6,'Columna Lumbo Sacra',1,0,'C',1);
  $pdf->Cell(5,6,$CUAH,1,0,'C',1);
  $pdf->Cell(31,6,'Cuadro Hematico',1,0,'C',1);
   $pdf->Cell(5,6,$GLI,1,0,'C',1);
  $pdf->Cell(31,6,'Glicemia',1,0,'C',1);
  $pdf->Cell(5,6,$ECARD,1,0,'C',1);
  $pdf->Cell(31,6,'Electrocardiograma',1,0,'C',1);
   $pdf->Ln(6);
  $pdf->Cell(5,6,$POR,1,0,'C',1);
  $pdf->Cell(31,6,'Parcial de Orina',1,0,'C',1);
  $pdf->Cell(5,6,$pLip,1,0,'C',1);
  $pdf->Cell(31,6,'Perfil Lipidico',1,0,'C',1);
  $pdf->Cell(5,6,$pHep,1,0,'C',1);
  $pdf->Cell(31,6,'Perfil Hepatico',1,0,'C',1);
   $pdf->Cell(5,6,$pRen,1,0,'C',1);
  $pdf->Cell(31,6,'Perfil Renal',1,0,'C',1);
  $pdf->Cell(5,6,$FROTSP,1,0,'C',1);
  $pdf->Cell(31,6,'Frotis Sangre Peri.',1,0,'C',1);
   $pdf->Ln(6);
  $pdf->Cell(5,6,$hemoCLASI,1,0,'C',1);
  $pdf->Cell(31,6,'Hemoclasificacion',1,0,'C',1);
  $pdf->Cell(5,6,$Espermog,1,0,'C',1);
  $pdf->Cell(31,6,'Espermograma',1,0,'C',1);
  $pdf->Cell(5,6,$tsh2,1,0,'C',1);
  $pdf->Cell(31,6,'TSH',1,0,'C',1);
   $pdf->Cell(5,6,$ser,1,0,'C',1);
  $pdf->Cell(31,6,'Serologia',1,0,'C',1);
  $pdf->Cell(5,6,$aUc,1,0,'C',1);
  $pdf->Cell(31,6,'Acido Urico',1,0,'C',1);
   $pdf->Ln(6);
  $pdf->Cell(5,6,$tDrogas,1,0,'C',1);
  $pdf->Cell(31,6,'Tamizaje Drogas',1,0,'C',1);
  $pdf->Cell(5,6,$alco,1,0,'C',1);
  $pdf->Cell(31,6,'Alcohol',1,0,'C',1);
  $pdf->Cell(5,6,$colin2,1,0,'C',1);
  $pdf->Cell(31,6,'Colinesterasa',1,0,'C',1);
   $pdf->Cell(5,6,$froFAR,1,0,'C',1);
  $pdf->Cell(31,6,'Frotis Faringeo',1,0,'C',1);
  $pdf->Cell(5,6,$kun,1,0,'C',1);
  $pdf->Cell(31,6,'KOH Unas',1,0,'C',1);
   $pdf->Ln(6);
  $pdf->Cell(5,6,$copro,1,0,'C',1);
  $pdf->Cell(31,6,'Coprologico',1,0,'C',1);
  $pdf->Cell(5,6,$baci,1,0,'C',1);
  $pdf->Cell(31,6,'Baciloscopia',1,0,'C',1);
  $pdf->Cell(5,6,$evNe,1,0,'C',1);
  $pdf->Cell(31,6,'Evaluacion Neuropsic.',1,0,'C',1);
   $pdf->Cell(5,6,$ot,1,0,'C',1);
  $pdf->Cell(31,6,'Otro',1,0,'C',1);
  $pdf->Cell(5,6,'',1,0,'C',1);
  $pdf->Cell(31,6,'Ninguna',1,0,'C',1);
  $pdf->Ln(6);
  $pdf->Cell(180,4,'6. OBSERVACIONES: '.$observRec,1,0,'C',1);
  $pdf->Ln(1);
  $pdf->Cell(65,25,'FUNCIONARIO RESPONSABLE:', 0,0,'C');  
    $pdf->Cell(150,25,'PACIENTE:', 0,0,'C');  

  $pdf->Image('images/sello.PNG', 15, 226, 48 );
  $pdf->Image('../signatures/'.$row3['firmaNombre'], 130, 226, 48 );
   $pdf->Ln(24);
  $pdf->Cell(55,25,'DERLY JOHANA BAYONA MALDONADO', 0,0,'C');  
    $pdf->Cell(165,25,$row['primerNombre'].' '.$row['segundoNombre'].' '.$row['primerApellido'].' '.$row['segundoApellido'], 0,0,'C');
       $pdf->Ln(2);
 $pdf->Cell(55,26,'Medicina especializada, Medicina del trabajo', 0,0,'C');  
  $pdf->Ln(3);
 $pdf->Cell(55,26,'Registro Profesional:1054/2019', 0,0,'C');  
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