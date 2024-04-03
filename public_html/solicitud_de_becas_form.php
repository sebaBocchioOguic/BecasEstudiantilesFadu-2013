<?php
$titulo="FADU - Solicitud de Becas";
//include("../validacion.php");
//$nombre=$_SESSION['nombre'];
$error=$_GET['error'];
?>
<html>
	<head>
		<title><?php echo($titulo);?></title>
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />

		<link href="./00t/00e.css" rel="stylesheet" type="text/css" />
   		<link href="./css/plantilla_becas.css" rel="stylesheet" type="text/css" />

		<script language="JavaScript" src="./00t/00j.js"></script>
		<script language="JavaScript" type="text/javascript" src="./js/string.js"></script>
		<script language="javascript" type="text/javascript">

		function inicio_pagina(){
			MM_preloadImages('./00t/00n/ite_car_ins_m.gif','./00t/00n/ite_car_aca_m.gif','./00t/00n/ite_car_inv_m.gif');
			<?php 
				switch($error){
					case 2:{?>
						alert('Ya has solicitado previamente la inscripción a esta beca');
			<?php	}
				}
			?>
		}

		function validarEmail(valor) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)){
                return true;
            } else {
                return false;
            }
        }

		function validar_campos(){
			if(trim(document.getElementById("seleccion_beca").value).length == 0){ // Valido que la beca no viaje vacía
                alert('Debe seleccionar una beca'); return 0;}

			if(trim(document.getElementById("nombre_solicitante").value).length == 0){ // Valido que el nombre no viaje vacío
                alert('Debe ingresar su nombre'); return 0;}
			if(trim(document.getElementById("apellido_solicitante").value).length == 0){ // Valido que el apellido no viaje vacío
                alert('Debe ingresar su apellido'); return 0;}

			if(trim(document.getElementById("documento_solicitante").value).length == 0){ // Valido que el documento no viaje vacío
                alert('Debe ingresar su número de documento'); return 0;}
			if(isNaN(trim(document.getElementById("documento_solicitante").value))){		// Valido que el contenido sea un número
				alert('Debe ingresar un número de documento numérico'); return 0;}

			if ((trim(document.getElementById("dia_nac").value).length == 0) ||
				(trim(document.getElementById("mes_nac").value).length == 0) ||
				(trim(document.getElementById("ano_nac").value).length == 0)){ // Valido que la fecha de nacimiento no viaje vacía
                alert('Debe ingresar su fecha de nacimiento completa'); return 0;}
			var dia = document.getElementById("dia_nac").value;
			var mes = (document.getElementById("mes_nac").selectedIndex)-1; //el mes se considera desde 0 a 11 para la función DATE
			var ano = document.getElementById("ano_nac").value;
			valor_fecha = new Date (ano,mes,dia);
			if (valor_fecha.getDate() != dia){alert('La fecha de nacimiento ingresada es incorrecta'); return 0;}
			if (valor_fecha.getMonth() != mes){alert('La fecha de nacimiento ingresada es incorrecta'); return 0;}
			if (valor_fecha.getFullYear() != ano){alert('La fecha de nacimiento ingresada es incorrecta'); return 0;}
			

			if(trim(document.getElementById("domicilio_solicitante").value).length == 0){ // Valido que el domicilio no viaje vacío
                alert('Debe ingresar su domicilio'); return 0;}
			if(trim(document.getElementById("localidad_solicitante").value).length == 0){ // Valido que la localidad no viaje vacía
                alert('Debe ingresar la localidad'); return 0;}

			if(trim(document.getElementById("mail_solicitante").value).length == 0){ // Valido que el mail no viaje vacío
                alert('Debe ingresar su mail'); return 0;}
            if(!(validarEmail(document.getElementById("mail_solicitante").value))){ // Valido Email
                alert("La dirección de email ingresada es incorrecta."); return 0;}

			if(trim(document.getElementById("celular_solicitante").value).length == 0){ // Valido que el celular no viaje vacío
                alert('Debe ingresar su número de celular'); return 0;}
			if(isNaN(trim(document.getElementById("celular_solicitante").value))){		// Valido que el contenido sea un número
				alert('Debe ingresar un número de celular numérico'); return 0;}

			if(trim(document.getElementById("carrera_solicitante").value).length == 0){ // Valido que la carerra no viaje vacía
                alert('Debe ingresar su carrera'); return 0;}
			if(trim(document.getElementById("nivel_solicitante").value).length == 0){ // Valido que el nivel no viaje vacío
                alert('Debe ingresar el último nivel de diseño'); return 0;}
/*			if(trim(document.getElementById("nivel_estado").value).length == 0){ // Valido que el nivel no viaje vacío
                alert('Debe ingresar el estado del último nivel de diseño'); return 0;}*/

			// Valido el radiobutton de Trabajo
			opciones = document.getElementsByName("trabaja_solicitante");
			var seleccionado = false;
			for(var i=0; i<opciones.length; i++) {
				if(opciones[i].checked){
					seleccionado = true;
					break;
				}
			}
			if (seleccionado == false){
                alert('Debe ingresar si trabaja o no'); return 0;}


			// Valido el radiobutton de Internet
			opciones = document.getElementsByName("internet_solicitante");
			seleccionado = false;
			for(var i=0; i<opciones.length; i++) {
				if(opciones[i].checked){
					seleccionado = true;
					break;
				}
			}
			if (seleccionado == false){
                alert('Debe ingresar si tiene internet o no'); return 0;}



			// Envio el formulario
            document.solicitud_beca_form.submit();
		}</script>
	</head>
<!--<body bgcolor="#FAFAF3" text="000000" link="ff0040" vlink="ff0040" alink="a1a1a1"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('../00t/00n/ite_car_ins_m.gif','../00t/00n/ite_car_aca_m.gif','../00t/00n/ite_car_inv_m.gif')">-->
	<body onLoad="inicio_pagina();">
<!--<form name="buscador1" method=get action=http://www.google.com/u/fadu>   -->
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
	        <form name="solicitud_beca_form" action="solicitud_beca.php" method="post">
				<?php // Conexión a la base de datos 'fadu' 
					include("./conexion/conexion.php"); ?>
              <table width="102" border="0" cellspacing="0" cellpadding="0" id="solicitud_beca_table">
                <tr> 
                  <td colspan="2" class="tit15-333" height="33" bgcolor="e6e6df">Inscripci&oacute;n a becas</td>
                </tr>
                <tr valign="middle"> 
                  <td colspan="2" class="texto" height="30"><img src="./00t/00i/00.gif" width="420" height="1"></td>
                </tr>
                <tr>
                	<td colspan="2" class="titulo_form">Formulario de inscripci&oacute;n a becas</td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <th width="130">Beca a solicitar</th>
					<td width="290">
                    	<select name="seleccion_beca" id="seleccion_beca" value="" >
                           	<option value="">- - - - - - - - - - - - - - - - - - - - - - -</option>
                        	<optgroup label="Becas Vigentes">
								<?php
									// Obtiene las becas vigentes de la tabla
									$consulta="select * from becas where vigente_becas = 'S' order by 1";
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
                    <th>Nombre</th>
                    <td><input name="nombre_solicitante" type="text" id="nombre_solicitante" value="" size="40" maxlength="40"  /></td>
			    </tr>
                <tr>
                    <th>Apellido</th>
                    <td><input name="apellido_solicitante" type="text" id="apellido_solicitante" value="" size="40" maxlength="40"  /></td>
			    </tr>
                <tr>
                    <th>Documento</th>
                    <td><input name="documento_solicitante" type="text" id="documento_solicitante" value="" size="20" maxlength="8"  /></td>
			    </tr>
                <tr>
                    <th>Fecha de Nacimiento</th>
                    <td><select name="dia_nac" id="dia_nac" value="" >
                    		<option value="">D&iacute;a</option>
                            <?php
								$i = 1;
								while ($i <= 31){
									echo("<option value=\"".$i."\">".$i."</option>");
									$i++;
								}
							?>
	                    </select>de
	                    <select name="mes_nac" id="mes_nac" value="" ><option value="">Mes</option><option value="1">Enero</option><option value="2">Febrero</option><option value="3">Marzo</option><option value="4">Abril</option><option value="5">Mayo</option><option value="6">Junio</option><option value="7">Julio</option><option value="8">Agosto</option><option value="9">Septiembre</option><option value="10">Octubre</option><option value="11">Noviembre</option><option value="12">Diciembre</option>
                        </select>de
						<select name="ano_nac" id="ano_nac" value="" >
                    		<option value="">A&ntilde;o</option>
                            <?php
								$hoy = getdate();
								$i = $hoy[year];
								while ($i >= 1900){
									echo("<option value=\"".$i."\">".$i."</option>");
									$i--;
								}
							?>
	                    </select>
					</td>
			    </tr>
                <tr>
                    <th>Domicilio</th>
                    <td><input name="domicilio_solicitante" type="text" id="domicilio_solicitante" value="" size="40" maxlength="50"  /></td>
			    </tr>
                <tr>
                    <th>Localidad</th>
                    <td><input name="localidad_solicitante" type="text" id="localidad_solicitante" value="" size="40" maxlength="50" /></td>
			    </tr>
                <tr>
                    <th>Provincia</th>
                    <td><input name="provincia_solicitante" type="text" id="provincia_solicitante" value="" size="40"maxlength="40"  /></td>
			    </tr>
                <tr>
                    <th>Mail</th>
                    <td><input name="mail_solicitante" type="text" id="mail_solicitante" value="" size="40" maxlength="50" /></td>
			    </tr>
                <tr>
                    <th>Celular</th>
                    <td><input name="celular_solicitante" type="text" id="celular_solicitante" value="" size="20" maxlength="15"  /></td>
			    </tr>
                <tr>
                    <th>Carrera</th>
                    <td><select name="carrera_solicitante" id="carrera_solicitante">
		                    <option value="">- - - - - - - - - - - - - - - - - - - - - - - - - - - -</option>
                            <option value="Arquitectura">Arquitectura</option>
                            <option value="Diseño Gráfico">Dise&ntilde;o Gr&aacute;fico</option>
                            <option value="Diseño de Imágen y Sonido">Dise&ntilde;o de Im&aacute;gen y Sonido</option>
                            <option value="Diseño de Indumentaria y Textil">Dise&ntilde;o de Indumentaria y Textil</option>
                            <option value="Diseño Industrial">Dise&ntilde;o Industrial</option>
                            <option value="Diseño del Paisaje">Dise&ntilde;o del Paisaje</option>
                        </select>
                    </td>
			    </tr>
                <tr>
                    <th>Nivel Actual</th>
                    <td>
                   	  <select name="nivel_solicitante" type="text" id="nivel_solicitante">
		                    <option value="">- - - - - - - - - - - - - - - -</option>
                            <option value="CBC">CBC</option>
                            <option value="Diseño 1">Dise&ntilde;o 1</option>
                            <option value="Diseño 2">Dise&ntilde;o 2</option>
                    		<option value="Diseño 3">Dise&ntilde;o 3</option>
                            <option value="Diseño 4">Dise&ntilde;o 4</option>
                            <option value="Diseño 5">Dise&ntilde;o 5</option>
                        </select>
                        <input name="nivel_estado" id="nivel_estado" type="checkbox" /> Aprobado
                   </td>
			    </tr>
                <tr>
                    <th>Trabaja ?</th>
                    <td><input name="trabaja_solicitante" type="radio" id="trabaja_solicitante" value="S"  />S&iacute;
                  		<input name="trabaja_solicitante" type="radio" id="trabaja_solicitante" value="N" style="margin-left:80px;"  />No</td>
			    </tr>
                <tr>
                    <th>Tiene internet en su casa ?</th>
                    <td><input name="internet_solicitante" type="radio" id="internet_solicitante" value="S" />S&iacute;
						<input name="internet_solicitante" type="radio" id="internet_solicitante" value="N" style="margin-left:80px;" />No</td>
			    </tr>
				<tr>
	               <td colspan="2" style="text-align:center;"><input type="button" value="Solicitar Beca" name="enviar_solicitud" id="enviar_solicitud" onClick="javascript:validar_campos();"  style="margin:15px;" /></td>
               </tr>
                <tr><td colspan="2">
              			<?php //Inicio del muestreo
				
						// Obtiene el total de becas de la tabla
						$consulta="select COUNT(id_beca) from becas where vigente_becas = 'S'";
						$resultado=mysql_query($consulta);
						// esto guarda la cantidad de resultados obtenidos
						$fila_cant=mysql_fetch_array($resultado);
						$cantidad_becas=$fila_cant[0];
				
						echo("Existen ".$cantidad_becas." becas vigentes en este momento");
				
				/*        switch($error){
							case 1:
								{echo("Debe ingresar el t&iacute;tulo");
								break;}
							case 2:
								{echo("Debe ingresar la noticia");
								break;}
						}*/
						?></td>
                </tr>
                <tr><td colspan="2" style="padding-top:20px;"><a href="http://www.fadu.uba.ar/extension/bec_index.html?" style="color:ff0040;">&lt;-- Regresar a la p&aacute;gina inicial de becas</a></td></tr>
              </table>
              </form>
            </td>
            <td class="texto">&nbsp;</td>
            <td class="texto" background="./00t/00h/dia_80.gif">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" background="./00t/00i/bg_f0e9.gif">
                <tr> 
                  <td  background="./00t/00i/bg_tab.gif" class="texto" height="7"><img src="./00t/00i/00.gif" width="15" height="1"></td>
                </tr>
                <tr> 
                  <td class="texto"><a href="http://www.fadu.uba.ar/index.html?" style="color:ff0040;">extensi&oacute;n: p&aacute;gina 
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
<!--</form>-->
        <?php
        mysql_close();?>
	</body>
</html>