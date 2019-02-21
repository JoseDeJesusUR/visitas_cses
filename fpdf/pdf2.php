<?php 
 session_start();
 $id_usu=$_SESSION["ses_id"];
	include 'plantilla_pdf.php';
	require 'conexion2.php';

    $idx = $_GET["idx"];
	$query="SELECT * FROM visita WHERE id='$idx'"; 
	$resultado = $mysqli->query($query);

	$pdf = new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();

		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(200, 12, 'NOTA INFORMATIVA', 0, 1, 'C');
/////////////////////////////////////////////

	$pdf->SetFillColor(232, 232, 232);

		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 12, 'DATOS GENERALES DEL PLANTEL', 0, 1, 'L');


   		$pdf->SetFont ('Arial', '', 11);
	$row = $resultado->fetch_assoc();
	$pdf->Cell (60, 6, 'NOMBRE DE LA ESCUELA:'.'              '. utf8_decode($row['nombre_esc']), 0, 1, 'L', 1);				
	$pdf->Cell (60, 6, 'CCT:'.'                                                    '. utf8_decode($row['cct_esc']), 0, 1, 'L', 1); 
	$pdf->Cell (60, 6, 'TURNO:'.'                                               '. utf8_decode($row['turno_esc']), 0, 1, 'L', 1);
	$pdf->Cell (60, 6, 'DOMICILIO DEL PLANTEL:'.'                '. utf8_decode($row['domicilio']), 0, 1, 'L', 1);
	$pdf->Cell (60, 6, 'TELEFONOS:'.'                                      '. utf8_decode($row['telefonos']), 0, 1, 'L', 1);
	$pdf->Cell (60, 6, 'DIRECTOR:'.'                                         '. utf8_decode($row['director']), 0, 1, 'L', 1);
	$pdf->Cell (60, 6, 'MAIL:'.'                                                   '. utf8_decode($row['mail']), 0, 1, 'L', 1);
	$pdf->Cell (60, 6, 'FECHA DE LA VISITA:'.'                        '. utf8_decode($row['titulo']), 0, 1, 'L', 1);
/////////////////////////////////////////////
		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 15, 'PROPOSITO DE LA VISITA', 0, 1, 'L');
	$pdf->SetFont ('Arial', '', 11);
	$query="SELECT * FROM visita WHERE usuario='$id'";
	$resultado = $mysqli->query($query);
	$pdf->MultiCell(185, 5,''. utf8_decode($row['txt_datos']), 0, 'L', 1);				
/////////////////////////////////////////////
		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 15, 'NECESIDADES DETECTADAS', 0, 1, 'L', 0);
		$pdf->SetFont ('Arial', '', 11);
	$query="SELECT * FROM visita WHERE usuario='$id_usu'";
	$resultado = $mysqli->query($query);
	$pdf->MultiCell(185, 5,''. utf8_decode($row['txt_necesidades']), 0, 'L',1);				
/////////////////////////////////////////////
		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 15, 'ACUERDOS REALIZADOS', 0, 1, 'L');
	$pdf->SetFont ('Arial', '', 11);
	$query="SELECT * FROM visita WHERE usuario='$id_usu'";
	$resultado = $mysqli->query($query);
	$pdf->MultiCell(185, 7,''. utf8_decode($row['txt_acuerdos']), 0, 'L',1);					
/////////////////////////////////////////////
	$pdf->AliasNbPages();
	$pdf->AddPage();

		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 15, 'SEGUIMIENTO DE LA VISITA', 0, 1, 'L');

//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 12, 'ACCIONES REALIZADAS', 0, 1, 'L');
	$pdf->SetFont ('Arial', '', 11);
	$query="SELECT * FROM visita WHERE usuario='$id'";
	$resultado = $mysqli->query($query);
	$pdf->MultiCell(185, 5,''. utf8_decode($row['txt_acciones']), 0, 'L', 1);				
/////////////////////////////////////////////
		$pdf->SetFont ('Arial', 'B', 12);
		$pdf->Cell(1);
		$pdf->Cell(65, 12, 'RESULTADOS OBTENIDOS', 0, 1, 'L');
	$pdf->SetFont ('Arial', '', 11);
	$query="SELECT * FROM visita WHERE usuario='$id'";
	$resultado = $mysqli->query($query);
	$pdf->MultiCell(185, 5,''. utf8_decode($row['txt_resul']), 0, 'L', 1);				
/////////////////////////////////////////////
	$pdf->Output();
?>

