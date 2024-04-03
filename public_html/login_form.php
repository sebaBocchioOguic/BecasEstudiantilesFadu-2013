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
		}

		function validar_campos(){ 

            if(trim(document.getElementById("usuario_login").value).length == 0){ // Valido que el usuario no viaje vacío
                alert('Debe ingresar su nombre de usuario'); return 0;}
			if(trim(document.getElementById("clave_login").value).length == 0){ // Valido que la clave no viaje vacía
                alert('Debe ingresar su clave'); return 0;}

			// Envio el formulario
            document.login_form.submit();
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
	        <form name="login_form" action="login.php" method="post">
				<?php // Conexión a la base de datos 'fadu' 
					include("./conexion/conexion.php"); ?>
              <table width="102" border="0" cellspacing="0" cellpadding="0" id="solicitud_beca_table">
                <tr> 
                  <td colspan="2" class="tit15-333" height="33" bgcolor="e6e6df">Login para usuarios administradores</td>
                </tr>
                <tr valign="middle"> 
                  <td colspan="2" class="texto" height="30"><img src="./00t/00i/00.gif" width="420" height="1"></td>
                </tr>
                <tr>
                	<td colspan="2" class="titulo_form">Formulario de ingreso</td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <th>Usuario</th>
                    <td><input name="usuario_login" type="text" id="usuario_login" value="" size="40" maxlength="40"  /></td>
			    </tr>
                <tr>
                    <th>Clave</th>
                    <td><input name="clave_login" type="password" id="clave_login" value="" size="40" maxlength="40"  /></td>
			    </tr>
				<tr>
	               <td colspan="2" style="text-align:center;"><input type="button" value="Ingresar" name="enviar_login" id="enviar_login" onClick="javascript:validar_campos();"  style="margin:15px;" /></td></tr>
		<?php
			$error = $_GET['error'];
			switch($error){
				case 1:{?>
                            <tr><td colspan="2">
                        <div style="width:400px; padding:12px; text-align:center; background-color:#f00; color:#fff;
                        font-weight:bold; margin:auto; border:#300; solid:1px;">
                            Usuario y/o clave incorrectos.<br />Intente nuevamente.
                        </div></td></tr>
		        <?php  	break;
					}
				case 2:{?>
                            <tr><td colspan="2">
                        <div style="width:400px; padding:12px; text-align:center; background-color:#f00; color:#fff;
                        font-weight:bold; margin:auto; border:#300; solid:1px;">
                            Su sesi&oacute;n de usuario ha expirado por inactividad.<br />Vuelva a ingresar con su clave.
                        </div></td></tr>
			<?php	}
				}?>
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
<!--</form>-->
        <?php
        mysql_close();?>
	</body>
</html>