<?php
include("validacion.php");
$nombre=$_SESSION['nombre'];
include("../conexion/conexion.php");

//$rango_desde = $_POST['ano_desde'].$_POST['mes_desde'].$_POST['dia_desde'];
//$rango_hasta = mktime(0,0,0,$_POST['dia_hasta'],$_POST['mes_hasta'],$_POST['ano_hasta']);

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


$total_solicitudes = 0;
/*$consulta="select * from beca_solicitada where fecha_beca_solicitada between '$ano_inscr_desde.$mes_inscr_desde.$dia_inscr_desde' and '$ano_inscr_hasta.$mes_inscr_hasta.$dia_inscr_hasta' order by 1";*/
$consulta="SELECT beca_solicitada.fecha_beca_solicitada, beca_solicitada.id_beca_solicitada, solicitantes.documento_solicitante, solicitantes.nombre_solicitante, solicitantes.apellido_solicitante, solicitantes.fecha_nac_solicitante, solicitantes.mail_solicitante, solicitantes.celular_solicitante, solicitantes.carrera_solicitante, solicitantes.nivel_solicitante, solicitantes.trabaja_solicitante, solicitantes.internet_solicitante FROM beca_solicitada INNER JOIN solicitantes ON beca_solicitada.id_documento = solicitantes.documento_solicitante WHERE fecha_beca_solicitada between '$ano_inscr_desde.$mes_inscr_desde.$dia_inscr_desde' and '$ano_inscr_hasta.$mes_inscr_hasta.$dia_inscr_hasta' AND id_beca = '$id_beca_sol' order by 1";
$resultado=mysql_query($consulta);

header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte_solicitudes.xls");
header("Pragma: no-cache");
header("Expires: 0"); 

// Separador de columnas
$sep = "\t";

//Imprime títulos de columnas

//Imprime los títulos de columnas de forma automática
/*for ($i = 0; $i < mysql_num_fields($resultado); $i++){
	echo mysql_field_name($resultado,$i) . "\t";
	}*/
//Imprime a mano cada columna (esto sirve para personalizar el texto de la columna)

echo("REPORTE DE SOLICITUDES DE BECA");
print("\n");
print("\n");
echo("Beca: ".$nom_beca." / Desde: ".$dia_inscr_desde."-".$mes_inscr_desde."-".$ano_inscr_desde."  Hasta: ".$dia_inscr_hasta."-".$mes_inscr_hasta."-".$ano_inscr_hasta);
print("\n");
print("\n");

echo ("Fecha Inscripción"."\t"."Nro. Inscripción"."\t"."Documento"."\t"."Nombre"."\t"."Apellido"."\t"."Fecha Nacimiento"."\t"."Mail"."\t"."Celular"."\t"."Carrera"."\t"."Nivel Carrera"."\t"."Trabaja?"."\t"."Tiene Internet?"."\t");

print("\n");

while($fila = mysql_fetch_row($resultado)){
	
	$cadena_insert = "";
	$total_solicitudes++;
	
	for($j=0; $j<mysql_num_fields($resultado);$j++){
		
		if(!isset($fila[$j]))
			$cadena_insert .= "NULL".$sep;
		elseif ($fila[$j] != "")
				$cadena_insert .= $fila[$j].$sep;
			else
				$cadena_insert .= "".$sep; 
		
	}
	
	$cadena_insert = str_replace($sep."$", "", $cadena_insert);
	
	$cadena_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $cadena_insert);
	$cadena_insert .= "\t";
	
	print(trim($cadena_insert));
	
	print "\n"; 
	
}
print("\n");
echo("Total de Solicitudes: ".$total_solicitudes);
?>
