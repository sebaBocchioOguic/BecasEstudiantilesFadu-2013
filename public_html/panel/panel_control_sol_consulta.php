<?php
$titulo="Panel de Control - FADU Extensión";
include("validacion.php");
$nombre=$_SESSION['nombre'];
?>
<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		<link href="../00t/00e.css" rel="stylesheet" type="text/css" />
        <link href="../css/plantilla_becas.css" rel="stylesheet" type="text/css" />

		<script language="JavaScript" src="../00t/00j.js"></script>
		<script language="JavaScript" type="text/javascript" src="../js/string.js"></script>
		<script language="javascript" type="text/javascript">

		function inicio_pagina(){
			MM_preloadImages('../00t/00n/ite_car_ins_m.gif','../00t/00n/ite_car_aca_m.gif','../00t/00n/ite_car_inv_m.gif');
		}

		function validar_campos(){
			if(trim(document.getElementById("seleccion_beca").value).length == 0){ // Valido que la beca no viaje vacía
                alert('Debe seleccionar una beca'); return 0;}

			if ((trim(document.getElementById("dia_desde").value).length == 0) ||
				(trim(document.getElementById("mes_desde").value).length == 0) ||
				(trim(document.getElementById("ano_desde").value).length == 0)){ 
                alert('Debe ingresar correctamente la fecha "Inscripción Desde"'); return 0;}
			var dia_desde = document.getElementById("dia_desde").value;
			var mes_desde = (document.getElementById("mes_desde").selectedIndex)-1; //el mes se considera desde 0 a 11 para la función DATE
			var ano_desde = document.getElementById("ano_desde").value;
			var valor_fecha_desde = new Date (ano_desde,mes_desde,dia_desde);
			if (valor_fecha_desde.getDate() != dia_desde){
				alert('La fecha "Inscripción Desde" es incorrecta'); return 0;}
//alert('dia_desde2='+dia_desde);
			if (valor_fecha_desde.getMonth() != mes_desde){
				alert('La fecha "Inscripción Desde" es incorrecta'); return 0;}
			if (valor_fecha_desde.getFullYear() != ano_desde){
				alert('La fecha "Inscripción Desde" es incorrecta'); return 0;}

			if ((trim(document.getElementById("dia_hasta").value).length == 0) ||
				(trim(document.getElementById("mes_hasta").value).length == 0) ||
				(trim(document.getElementById("ano_hasta").value).length == 0)){ 
                alert('Debe ingresar correctamente la fecha "Inscripción Hasta"'); return 0;}

			var dia_hasta = document.getElementById("dia_hasta").value;
			var mes_hasta = (document.getElementById("mes_hasta").selectedIndex)-1; //el mes se considera desde 0 a 11 para la función DATE
			var ano_hasta = document.getElementById("ano_hasta").value;
			var valor_fecha_hasta = new Date (ano_hasta,mes_hasta,dia_hasta);
			if (valor_fecha_hasta.getDate() != dia_hasta){alert('La fecha "Inscripción Hasta" es incorrecta'); return 0;}
			if (valor_fecha_hasta.getMonth() != mes_hasta){alert('La fecha "Inscripción Hasta" es incorrecta'); return 0;}
			if (valor_fecha_hasta.getFullYear() != ano_hasta){alert('La fecha "Inscripción Hasta" es incorrecta'); return 0;}
		
		
			if (valor_fecha_hasta < valor_fecha_desde){alert('La fecha "Inscripción Hasta" debe ser superior a la fecha "Inscripción Desde"');
				return 0;}

			// Envio el formulario
            document.consulta_solicitudes_form.submit();
		}
		</script>
	</head>
	<body onLoad="inicio_pagina();">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="texto" valign="top" align="center"> 
    <td class="texto"  align="right" ><font size="-7">&nbsp;</font></td>
      <td class="texto"  width="34%" bgcolor="#F0F0E9">
        <table width="762" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td bgcolor="#FAFAF3" height="9"><img src="../00t/00i/00.gif" width="42" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="../00t/00i/00.gif" width="212" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="../00t/00i/00.gif" width="9" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="../00t/00i/00.gif" width="457" height="1"></td>
            <td bgcolor="#FAFAF3" height="9"><img src="../00t/00i/00.gif" width="42" height="1"></td>
          </tr>
          <tr valign="top"> 
            <td class="texto" valign="middle" height="45" >&nbsp;</td>
            <td class="texto" valign="middle" colspan="3" height="45" 
><a href="http://www.fadu.uba.ar/index.html?" style="color:#ff0040;" >Facultad de Arquitectura, Dise&ntilde;o y Urbanismo (UBA)</a></td>
            <td class="texto" valign="middle" height="45" 
>&nbsp;</td>
          </tr>
          <tr valign="top"> 
            <td class="texto" >&nbsp; </td>
            <td class="texto" bgcolor="e6e6df" 
> 
              <table width="212" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td class="texto" height="9"><img src="../00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/institucional/index.html?" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ins','','../00t/00n/ite_car_ins_m.gif',1)"><img name="ins" border="0" src="../00t/00n/ite_car_ins.gif" width="212" height="26"></a></td>
                </tr>
                <tr> 
                  <td class="texto" height="1" bgcolor="fafaf3"><img src="../00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/academica/index.html?" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('aca','','../00t/00n/ite_car_aca_m.gif',1)"><img name="aca" border="0" src="../00t/00n/ite_car_aca.gif" width="212" height="26"></a></td>
                </tr>
                <tr> 
                  <td class="texto" bgcolor="fafaf3" height="1"><img src="../00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/investigacion/index.html?" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('inv','','../00t/00n/ite_car_inv_m.gif',1)"><img name="inv" border="0" src="../00t/00n/ite_car_inv.gif" width="212" height="26"></a></td>
                </tr>
                <tr> 
                  <td class="texto" bgcolor="fafaf3" height="1"><img src="../00t/00i/00.gif" width="12" height="1"></td>
                </tr>
                <tr valign="bottom"> 
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/extension/index.html?"><img src="../00t/00n/ite_car_ext_m.gif" width="212" height="26" border="0"></a></td>
                </tr>
                <tr> 
                  <td class="texto" height="9"><img src="../00t/00i/00.gif" width="12" height="1"></td>
                </tr>
              </table>
            </td>
            <td class="texto" bgcolor="e6e6df" 
>&nbsp;</td>
            <td class="texto" align="right" background="../00t/00n/bg_lii_fa.gif" height="129" 
><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0" width="456" height="129">
                <param name=movie value="../00t/00h/swf_01.swf">
                <param name=quality value=high>
                <embed src="../00t/00h/swf_01.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="456" height="129">
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
            <td height="30"><img src="../00t/00i/00.gif" width="42" height="1"></td>
            <td height="30"><img src="../00t/00i/00.gif" width="420" height="1"></td>
            <td height="30"><img src="../00t/00i/00.gif" width="24" height="1"></td>
            <td height="30"><img src="../00t/00i/00.gif" width="234" height="1"></td>
            <td height="30"><img src="../00t/00i/00.gif" width="42" height="1"></td>
          </tr>
          <tr valign="top"> 
            <td class="texto"><img src="../00t/00i/00.gif" width="24" height="1"> 
            </td>
            <td> 
              <table width="102" border="0" cellspacing="0" cellpadding="0" id="solicitud_beca_table">
                <tr> 
                  <td colspan="4" class="tit15-333" height="33" bgcolor="e6e6df">Estas logueado/a como <i><?php echo($nombre); ?></i></td>
                </tr>
                <tr>
                    <th colspan="4" class="titulo_panel_cierre"><a href="logout.php" target="_self">Cerrar sesi&oacute;n</a></th>
			    </tr>
                <tr valign="middle">
                  <td colspan="4" class="texto" height="30"><img src="../00t/00i/00.gif" width="420" height="1"></td>
                </tr>
                <tr>
                	<td colspan="4" class="titulo_form">Panel de control - Solicitudes - Consulta</td>
                </tr>
                <tr><td colspan="4">&nbsp;</td></tr>
				<form id="consulta_solicitudes_form" name="consulta_solicitudes_form" action="solicitudes_consulta.php" method="post">
                <tr>
                    <th>Selecciona la beca</th>
                    <td colspan="3">
                       	<select name="seleccion_beca" id="seleccion_beca" value="" >
                           	<option value="">- - - - - - - - - - - - - - - - - - - - - - -</option>
                        	<optgroup label="Becas">
								<?php
									include("../conexion/conexion.php");
									// Obtiene las becas de la tabla
									$consulta="select * from becas order by 1";
									$resultado=mysql_query($consulta);
									// esto guarda la cantidad de resultados obtenidos
									while($fila=mysql_fetch_array($resultado)){
										echo("<option value=\"".$fila[id_beca]."\">".$fila[nombre_becas]."</option>");
									}
								?>
                            </optgroup>
                        </select>
                    </td>
			    </tr>

                <tr>
                    <th>Inscripciones Desde</th>
                    <td><select name="dia_desde" id="dia_desde" value="" >
                    		<option value="0.">D&iacute;a</option>
                            <?php
								$i_d_d = 1;
								while ($i_d_d <= 31){
									echo("<option value=\"".$i_d_d."\">".$i_d_d."</option>");
									$i_d_d++;
								}
							?>
	                    </select>de
	                    <select name="mes_desde" id="mes_desde" value="" ><option value="">Mes</option><option value="1">Enero</option><option value="2">Febrero</option><option value="3">Marzo</option><option value="4">Abril</option><option value="5">Mayo</option><option value="6">Junio</option><option value="7">Julio</option><option value="8">Agosto</option><option value="9">Septiembre</option><option value="10">Octubre</option><option value="11">Noviembre</option><option value="12">Diciembre</option>
                        </select>de
						<select name="ano_desde" id="ano_desde" value="" >
                    		<option value="">A&ntilde;o</option>
                            <?php
								$hoy = getdate();
								$i_a_d = $hoy[year];
								while ($i_a_d >= 2013){
									echo("<option value=\"".$i_a_d."\">".$i_a_d."</option>");
									$i_a_d--;
								}
							?>
	                    </select>
					</td>
			    </tr>
                <tr>
                    <th>Hasta</th>
                    <td><select name="dia_hasta" id="dia_hasta" value="" >
                    		<option value="">D&iacute;a</option>
                            <?php
								$i_d_h = 1;
								while ($i_d_h <= 31){
									echo("<option value=\"".$i_d_h."\">".$i_d_h."</option>");
									$i_d_h++;
								}
							?>
	                    </select>de
	                    <select name="mes_hasta" id="mes_hasta" value="" ><option value="">Mes</option><option value="1">Enero</option><option value="2">Febrero</option><option value="3">Marzo</option><option value="4">Abril</option><option value="5">Mayo</option><option value="6">Junio</option><option value="7">Julio</option><option value="8">Agosto</option><option value="9">Septiembre</option><option value="10">Octubre</option><option value="11">Noviembre</option><option value="12">Diciembre</option>
                        </select>de
						<select name="ano_hasta" id="ano_hasta" value="" >
                    		<option value="">A&ntilde;o</option>
                            <?php
								$i_a_h = $hoy[year];
								while ($i_a_h >= 2013){
									echo("<option value=\"".$i_a_h."\">".$i_a_h."</option>");
									$i_a_h--;
								}
							?>
	                    </select>
					</td>
			    </tr>
               <td colspan="4" style="text-align:center;"><input type="button" value="Consultar Inscriptos" name="enviar_solicitud" id="enviar_solicitud" onClick="javascript:validar_campos();"  style="margin:15px;" /></td>
				</form>
                <tr><td colspan="4">&nbsp;</td></tr>
                <tr>
                    <th colspan="4" class="titulo_panel"><a href="panel_control_solicitudes.php" target="_self">Regresar al Panel de Solicitudes</a></th>
			    </tr>
                <tr>
                    <th colspan="4" class="titulo_panel"><a href="panel_control.php" target="_self">Regresar al Panel Principal</a></th>
			    </tr>
              </table>
            </td>
            <td class="texto">&nbsp;</td>
            <td class="texto" background="../00t/00h/dia_80.gif">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" background="../00t/00i/bg_f0e9.gif">
                <tr> 
                  <td  background="../00t/00i/bg_tab.gif" class="texto" height="7"><img src="../00t/00i/00.gif" width="15" height="1"></td>
                </tr>
                <tr> 
                  <td class="texto"><a href="http://www.fadu.uba.ar/extension/index.html?" style="color:ff0040;">extensi&oacute;n: p&aacute;gina principal</a></td>
                </tr>
                <tr> 
                  <td background="../00t/00i/bg_tab.gif" class="texto" height="7"><img src="../00t/00i/00.gif" width="15" height="1"></td>
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
            <td><img src="../00t/00i/00.gif" width="24" height="1"></td>
            <td background="../00t/00i/bg_gri.gif"><img src="../00t/00i/00.gif" width="24" height="1"></td>
            <td><img src="../00t/00i/00.gif" width="24" height="1"></td>
            <td background="../00t/00i/bg_gri.gif"><img src="../00t/00i/00.gif" width="24" height="1"></td>
            <td><img src="../00t/00i/00.gif" width="24" height="1"></td>
          </tr>
          <tr> 
            <td height="30" colspan="5">&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td align="right"><a href="#"><img src="../00t/00i/fle_sub.gif" width="21" height="21" border="0"></a></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="90"><img src="../00t/00i/00.gif" width="42" height="1"></td>
            <td height="90"><img src="../00t/00i/00.gif" width="420" height="1"></td>
            <td height="90"><img src="../00t/00i/00.gif" width="24" height="1"></td>
            <td height="90"><img src="../00t/00i/00.gif" width="234" height="1"></td>
            <td height="90"><img src="../00t/00i/00.gif" width="42" height="1"></td>
          </tr>
        </table>
      </td>
    <td class="texto"  align="left" ><font size="-7">&nbsp;</font></td>
  </tr>
</table>
<?php mysql_close();?>
	</body>
</html>