<?php
require('../fpdf/fpdf.php');
include("validacion.php");
$nombre=$_SESSION['nombre'];
include("../conexion/conexion.php");


class PDF extends FPDF
{
	function Header()
	{
			$this->SetFont('Arial','B',15);
/*Original	//se mueve a la derecha
			$this->Cell(80);
			//muestra t�tulo centrado
			$this->Cell(0,10,'Credencial de Beca - FADU',1,0,'C');*/

			//muestra t�tulo centrado
			$this->Cell(0,10,'Credenciales de Becas - FADU',1,0,'C');
			//salto de linea
			$this->Ln(20);
	}
	
	function Footer()
	{
		//Posici�n: a 1.5 cm del final
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Impresi�n de Credenciales - P�gina '.$this->PageNo().' de '.'{nb}',1,0,'C');
	}
}



$dia_inscr_desde = $_POST['dia_desde'];
$mes_inscr_desde = $_POST['mes_desde'];
$ano_inscr_desde = $_POST['ano_desde'];
$dia_inscr_hasta = $_POST['dia_hasta'];
$mes_inscr_hasta = $_POST['mes_hasta'];
$ano_inscr_hasta = $_POST['ano_hasta'];

$id_beca_sol = $_POST['seleccion_beca'];


$consulta_nom_beca="SELECT nombre_becas FROM becas WHERE id_beca = '$id_beca_sol'";
$resultado_nom_beca = mysql_query($consulta_nom_beca);
$fila_nom_beca = mysql_fetch_array($resultado_nom_beca);
$nom_beca = $fila_nom_beca['nombre_becas'];



$consulta="SELECT beca_solicitada.fecha_beca_solicitada, beca_solicitada.id_beca_solicitada, solicitantes.documento_solicitante, solicitantes.nombre_solicitante, solicitantes.apellido_solicitante, solicitantes.fecha_nac_solicitante, solicitantes.mail_solicitante, solicitantes.celular_solicitante, solicitantes.carrera_solicitante, solicitantes.nivel_solicitante, solicitantes.trabaja_solicitante, solicitantes.internet_solicitante FROM beca_solicitada INNER JOIN solicitantes ON beca_solicitada.id_documento = solicitantes.documento_solicitante WHERE fecha_beca_solicitada between '$ano_inscr_desde.$mes_inscr_desde.$dia_inscr_desde' and '$ano_inscr_hasta.$mes_inscr_hasta.$dia_inscr_hasta' AND id_beca = '$id_beca_sol' order by 1";
$resultado=mysql_query($consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();


$hay_credenciales = false;

while($fila=mysql_fetch_array($resultado))
{
	$pdf->SetFont('Times','',14);
//	$pdf->Image('../img/credencial_beca.jpg',60,80,100);
	$pdf->Ln(10);
	$pdf->Image('../img/credencial_beca.jpg',55,null,100);
//	$pdf->Ln();
	$pdf->Cell(1,-67,'                                       '.$fila[3].' '.$fila[4]);
//	$pdf->Cell('TEXTO PDF');

	switch($fila[8]){
		case 'Dise�o Gr�fico':{
			$carrera='D.Gr�fico'; break;
		}
		case 'Arquitectura':{
			$carrera='Arquitectura'; break;
		}
		case 'Dise�o de Im�gen y Sonido':{
			$carrera='Imag.y Sonido'; break;
		}
		case 'Dise�o de Indumentaria y Textil':{
			$carrera='Ind.y Textil'; break;
		}
		case 'Dise�o Industrial':{
			$carrera='D.Industrial'; break;
		}
		case 'Dise�o del Paisaje':{
			$carrera='D.Paisaje'; break;
		}
	}

	$pdf->Cell(1,-44,'                                            '.$fila[2].'           '.$carrera);
	$pdf->SetFont('Arial','',7);

	switch($id_beca_sol){
		case 1:{
			$posy_beca = -54;
			break;
		}
		case 2:{
			$posy_beca = -43;
			break;
		}
		case 3:{
			$posy_beca = -32;
			break;
		}
		case 4:{
			$posy_beca = -21;
			break;
		}
	}

	$pdf->Cell(1,$posy_beca,'                                                                                                                                                                            X');
	$hay_credenciales = true;
}

if ($hay_credenciales == false){
	$pdf->SetFont('Times','',20);
	$pdf->Cell(0,60,'No se encontraron credenciales para la b�squeda realizada',0,0,'C');
}

$pdf->Output();
?>
