<?php
	$l_ok = 0; //FLAG 0=OK / >0=error

	$titulo="FADU - Inscripci&oacute;n a becas";
	$id_beca_form = $_POST['seleccion_beca'];
	$nombre_solicitante = $_POST['nombre_solicitante'];
	$apellido_solicitante = $_POST['apellido_solicitante'];
	$documento_solicitante = $_POST['documento_solicitante'];
	$dia_nacimiento = $_POST['dia_nac'];
	$mes_nacimiento = $_POST['mes_nac'];
	$ano_nacimiento = $_POST['ano_nac'];
	$domicilio_solicitante = $_POST['domicilio_solicitante'];
	$localidad_solicitante = $_POST['localidad_solicitante'];
	$provincia_solicitante = $_POST['provincia_solicitante'];
	$mail_solicitante = $_POST['mail_solicitante'];
	$celular_solicitante = $_POST['celular_solicitante'];
	$carrera_solicitante = $_POST['carrera_solicitante'];

	$nivel_solicitante = $_POST['nivel_solicitante'];
	if ($_POST['nivel_estado'] == true)
		$nivel_estado = " - Aprobado";
	else
		$nivel_estado = " - En Curso";
	$nivel_solicitante .= $nivel_estado;

	$trabaja_solicitante = $_POST['trabaja_solicitante'];
	$internet_solicitante = $_POST['internet_solicitante'];
	
	
	$fecha_solicitud = date("Y-m-d");
	
	// SI LOS DATOS BASICOS NO LLEGAN, SUPONGO QUE SE INGRESO POR URL, EN ESE CASO REDIRIJO AL FORMULARIO
	if (($id_beca_form == NULL) || ($nombre_solicitante == NULL) ||	($apellido_solicitante == NULL) ||
		($documento_solicitante == NULL) ||	($domicilio_solicitante == NULL) ||	($mail_solicitante == NULL) ||
		($celular_solicitante == NULL)){
	        header("Location:./solicitud_de_becas_form.php");
			$l_ok = 1; // ERROR DE INGRESO POR URL O CON CAMPOS VACIOS
		}
		

		if ($l_ok == 0){
				include("./conexion/conexion.php");
	
				// BUSCA QUE NO HAYA BECAS VIGENTES PARA EL DOCUMENTO INGRESADO
				// BUSCA CUALQUIER BECA VIGENTE A LA QUE ESTE INSCRIPTO Y SI ENCUENTRA DEVUELVE ERROR
/*				$consulta_beca_solicitada = "select id_beca from beca_solicitada where id_documento = '$documento_solicitante'";
				$result_beca_solicitada = mysql_query($consulta_beca_solicitada);
				while($fila_beca_solicitada = mysql_fetch_array($result_beca_solicitada)){
					$consulta_becas="select vigente_becas from becas where id_beca='$fila_beca_solicitada[0]'";
					$resultado_becas=mysql_query($consulta_becas);
					$fila_becas=mysql_fetch_array($resultado_becas);
					if ($fila_becas[0] == 'S'){
						header("Location:./solicitud_de_becas_form.php?error=2");
						$l_ok = 2;	// ERROR DE ALUMNO YA INSCRIPTO A BECAS
						}
					}*/

				// BUSCA QUE EL SOLICITANTE NO SE HAYA YA INSCRIPTO A ESA BECA EN PARTICULAR
				$consulta_beca_solicitada = "select * from beca_solicitada where id_documento = '$documento_solicitante' and id_beca = '$id_beca_form'";
				$result_beca_solicitada = mysql_query($consulta_beca_solicitada);
				if ($fila_beca_solicitada = mysql_fetch_array($result_beca_solicitada)){
						header("Location:./solicitud_de_becas_form.php?error=2");
						$l_ok = 2;	// ERROR DE ALUMNO YA INSCRIPTO A BECA
				}
			}

			//CONTINUA
			if ($l_ok == 0){

				$consulta="select COUNT(id_solicitante) from solicitantes where documento_solicitante = '$documento_solicitante'";
				$resultado=mysql_query($consulta);
				$fila=mysql_fetch_array($resultado);
	
				if($fila[0] > 0){	// UPDATE - Si encuentra registros para el documento
					  $add_solicitante="update solicitantes set domicilio_solicitante='$domicilio_solicitante', localidad_solicitante='$localidad_solicitante', provincia_solicitante='$provincia_solicitante', mail_solicitante='$mail_solicitante', celular_solicitante='$celular_solicitante', carrera_solicitante='$carrera_solicitante', nivel_solicitante='$nivel_solicitante', trabaja_solicitante='$trabaja_solicitante', internet_solicitante='$internet_solicitante'
					  where documento_solicitante = '$documento_solicitante' LIMIT 1;";
				}
				else{	// INSERT
					  $add_solicitante="insert into solicitantes (`documento_solicitante` ,`nombre_solicitante` ,`apellido_solicitante` ,`fecha_nac_solicitante` ,`domicilio_solicitante` ,`localidad_solicitante` ,`provincia_solicitante` ,`mail_solicitante` ,`celular_solicitante` ,`carrera_solicitante` ,`nivel_solicitante`, `trabaja_solicitante` ,`internet_solicitante`)
									values ('$documento_solicitante', '$nombre_solicitante', '$apellido_solicitante', '$ano_nacimiento.$mes_nacimiento.$dia_nacimiento' ,'$domicilio_solicitante' ,'$localidad_solicitante' ,'$provincia_solicitante' ,'$mail_solicitante' ,'$celular_solicitante' ,'$carrera_solicitante' ,'$nivel_solicitante' ,'$trabaja_solicitante' ,'$internet_solicitante');";
				}
	
						mysql_query($add_solicitante);
		  $add_solicitud_beca="insert into beca_solicitada (`id_beca` ,`id_documento` ,`fecha_beca_solicitada`) values ('$id_beca_form' ,'$documento_solicitante' ,'$fecha_solicitud');";
						mysql_query($add_solicitud_beca);
			}//end if $l_ok

			if ($l_ok == 0){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title><?php echo($titulo);?></title>
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />

		<link href="./00t/00e.css" rel="stylesheet" type="text/css" />
   		<link href="./css/plantilla_becas.css" rel="stylesheet" type="text/css" />
      </head>  
<body onLoad=onLoad="MM_preloadImages('./00t/00n/ite_car_ins_m.gif','./00t/00n/ite_car_aca_m.gif','./00t/00n/ite_car_inv_m.gif')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="texto" valign="top" align="center"> 
    <td class="texto"  align="right" ><font size="-7">&nbsp;</font></td>
      <td class="texto"  width="34%" bgcolor="#F0F0E9">
        <table width="762" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td bgcolor="#FAFAF3" height="9"><img src="./00t/00i/00.gif" width="42" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="./00t/00i/00.gif" width="212" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="./00t/00i/00.gif" width="9" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="./00t/00i/00.gif" width="457" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="./00t/00i/00.gif" width="42" height="1"></td>
          </tr>
          <tr valign="top"> 
            <td class="texto" valign="middle" height="45" >&nbsp;</td>
            <td class="texto" valign="middle" colspan="3" height="45" style="text-align:left;"
><a href="http://www.fadu.uba.ar/index.html?" style="color:#ff0040; text-align: left;" >Facultad de Arquitectura, Dise&ntilde;o y Urbanismo (UBA)</a></td>
            <td class="texto" valign="middle" height="45" 
>&nbsp;</td>
          </tr>
          <tr valign="top"> 
            <td class="texto" >&nbsp; </td>
            <td class="texto" bgcolor="e6e6df" 
> 
              <table width="212" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td class="texto" height="9"><img src="./00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/institucional/index.html?" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ins','','./00t/00n/ite_car_ins_m.gif',1)"><img name="ins" border="0" src="./00t/00n/ite_car_ins.gif" width="212" height="26"></a></td>
                </tr>
                <tr> 
                  <td class="texto" height="1" bgcolor="fafaf3"><img src="./00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/academica/index.html?" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('aca','','./00t/00n/ite_car_aca_m.gif',1)"><img name="aca" border="0" src="./00t/00n/ite_car_aca.gif" width="212" height="26"></a></td>
                </tr>
                <tr> 
                  <td class="texto" bgcolor="fafaf3" height="1"><img src="./00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/investigacion/index.html?" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('inv','','./00t/00n/ite_car_inv_m.gif',1)"><img name="inv" border="0" src="./00t/00n/ite_car_inv.gif" width="212" height="26"></a></td>
                </tr>
                <tr> 
                  <td class="texto" bgcolor="fafaf3" height="1"><img src="./00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/extension/index.html?"><img src="./00t/00n/ite_car_ext_m.gif" width="212" height="26" border="0"></a></td>
                </tr>
                <tr> 
                  <td class="texto" height="9"><img src="./00t/00i/00.gif" width="12" height="1"></td>
                </tr>
              </table>
            </td>
            <td class="texto" bgcolor="e6e6df" 
>&nbsp;</td>
            <td class="texto" align="right" background="./00t/00n/bg_lii_fa.gif" height="129" 
><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0" width="456" height="129">
                <param name=movie value="./00t/00h/swf_01.swf">
                <param name=quality value=high>
                <embed src="./00t/00h/swf_01.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="456" height="129">
                </embed> 
              </object></td>
            <td class="texto" 
>&nbsp;</td>
          </tr>
        </table>
      </td>
    <td class="texto"  align="left" ><font size="-7">&nbsp;</font></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="texto" valign="top" align="center"> 
    <td class="texto"  align="right" ><font size="-7">&nbsp;</font></td>
      <td class="texto"  width="34%" bgcolor="#F0F0E9">
        <table width="762" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td height="30"><img src="./00t/00i/00.gif" width="42" height="1"></td>
            <td height="30"><img src="./00t/00i/00.gif" width="420" height="1"></td>
            <td height="30"><img src="./00t/00i/00.gif" width="24" height="1"></td>
            <td height="30"><img src="./00t/00i/00.gif" width="234" height="1"></td>
            <td height="30"><img src="./00t/00i/00.gif" width="42" height="1"></td>
          </tr>
          <tr valign="top"> 
            <td class="texto"><img src="./00t/00i/00.gif" width="24" height="1"> 
            </td>
            <td> 
				<?php 
				/* Obtengo el número de id de solicitud. Tengo que ir a buscarlo a la tabla ya que se incremenra y graba automáticamente
				por la base de datos */
				$consulta_beca_solicitada = $result_beca_solicitada = $fila_beca_solicitada = NULL;

				$consulta_beca_solicitada = "select * from beca_solicitada where id_documento = '$documento_solicitante' and id_beca = '$id_beca_form'";
				$result_beca_solicitada = mysql_query($consulta_beca_solicitada);
				$fila_beca_solicitada = mysql_fetch_array($result_beca_solicitada);				
					
					?>
              <table width="102" border="0" cellspacing="0" cellpadding="0" id="solicitud_beca_table">
                <tr> 
                  <td colspan="2" class="tit15-333" height="33" bgcolor="e6e6df">Inscripci&oacute;n a becas</td>
                </tr>
                <tr valign="middle"> 
                  <td colspan="2" class="texto" height="30"><img src="./00t/00i/00.gif" width="420" height="1"></td>
                </tr>
                <tr>
                	<td colspan="2" class="titulo_form">Inscripci&oacute;n a becas</td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2">ACABAS DE SOLICITAR TU INSCRIPCI&Oacute;N EXITOSAMENTE !!</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <th style="text-align:left;">N&uacute;mero de Solicitud</th>
                    <td style="font-weight: bold;"><?php echo($fila_beca_solicitada[id_beca_solicitada]);?></td>
			    </tr>

                <tr>
                    <th style="text-align:left;">Fecha de Solicitud</th>
                    <td style="font-weight: bold;"><?php echo(date("d-m-Y"));?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;" width="170">Beca Solicitada</th>
					<td width="250">
								<?php
//									$consulta_beca_exitosa = "select * from becas where id_beca = '$id_beca_form'";
									$consulta_beca_exitosa = "select * from becas where id_beca = '$fila_beca_solicitada[id_beca]'";
									$resultado_beca_exitosa = mysql_query($consulta_beca_exitosa);
									$fila_beca_exitosa = mysql_fetch_array($resultado_beca_exitosa);
									echo($fila_beca_exitosa[nombre_becas]);
								?>
                    </td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Nombre</th>
                    <td><?php echo($nombre_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Apellido</th>
                    <td><?php echo($apellido_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Documento</th>
                    <td><?php echo($documento_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Fecha de Nacimiento</th>
                    <td><?php echo($dia_nacimiento."-".$mes_nacimiento."-".$ano_nacimiento);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Domicilio</th>
                    <td><?php echo($domicilio_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Localidad</th>
                    <td><?php echo($localidad_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Provincia</th>
                    <td><?php echo($provincia_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Mail</th>
                    <td><?php echo($mail_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Celular</th>
                    <td><?php echo($celular_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Carrera</th>
                    <td><?php echo($carrera_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Nivel de Dise&ntilde;o</th>
                    <td><?php echo($nivel_solicitante);?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Trabaja ?</th>
                    <td><?php if ($trabaja_solicitante == "S") echo("S&iacute;");
								else echo("No"); ?></td>
			    </tr>
                <tr>
                    <th style="text-align:left;">Tiene internet en casa ?</th>
                    <td><?php if ($internet_solicitante == "S") echo("S&iacute;");
								else echo("No"); ?></td>
			    </tr>
                <tr><td colspan="2" style="padding-top:20px;"><a href="http://www.fadu.uba.ar/extension/bec_index.html?" style="color:ff0040;">&lt;-- Regresar a la p&aacute;gina inicial de becas</a></td></tr>
              </table>
            </td>
            <td class="texto">&nbsp;</td>
            <td class="texto" background="./00t/00h/dia_80.gif">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" background="./00t/00i/bg_f0e9.gif">
                <tr> 
                  <td  background="./00t/00i/bg_tab.gif" class="texto" height="7"><img src="./00t/00i/00.gif" width="15" height="1"></td>
                </tr>
                <tr> 
                  <td class="texto"><a href="http://www.fadu.uba.ar/extension/index.html?" style="color:ff0040;">extensi&oacute;n: p&aacute;gina 
                    principal</a></td>
                </tr>
                <tr> 
                  <td background="./00t/00i/bg_tab.gif" class="texto" height="7"><img src="./00t/00i/00.gif" width="15" height="1"></td>
                </tr>
                <tr> 
                  <td class="texto">&nbsp;</td>
                </tr>
              </table>
            </td>
            <td class="texto">&nbsp;</td>
          </tr>
        </table>
      </td>
    <td class="texto"  align="left" ><font size="-7">&nbsp;</font></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="texto" valign="top" align="center"> 
    <td class="texto"  align="right" ><font size="-7">&nbsp;</font></td>
      <td class="texto"  width="34%" bgcolor="#F0F0E9"> 
        <table width="762" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td><img src="./00t/00i/00.gif" width="24" height="1"></td>
            <td background="./00t/00i/bg_gri.gif"><img src="./00t/00i/00.gif" width="24" height="1"></td>
            <td><img src="./00t/00i/00.gif" width="24" height="1"></td>
            <td background="./00t/00i/bg_gri.gif"><img src="./00t/00i/00.gif" width="24" height="1"></td>
            <td><img src="./00t/00i/00.gif" width="24" height="1"></td>
          </tr>
          <tr> 
            <td height="30" colspan="5">&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td align="right"><a href="#"><img src="./00t/00i/fle_sub.gif" width="21" height="21" border="0"></a></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="90"><img src="./00t/00i/00.gif" width="42" height="1"></td>
            <td height="90"><img src="./00t/00i/00.gif" width="420" height="1"></td>
            <td height="90"><img src="./00t/00i/00.gif" width="24" height="1"></td>
            <td height="90"><img src="./00t/00i/00.gif" width="234" height="1"></td>
            <td height="90"><img src="./00t/00i/00.gif" width="42" height="1"></td>
          </tr>
        </table>
      </td>
    <td class="texto"  align="left" ><font size="-7">&nbsp;</font></td>
  </tr>
</table>
<?php	} //end if
mysql_close(); ?>
</body>
</html>
