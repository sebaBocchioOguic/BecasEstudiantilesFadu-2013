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
                  <td class="texto" height="26"><a href="http://www.fadu.uba.ar/index.html?"><img src="../00t/00n/ite_car_ext_m.gif" width="212" height="26" border="0"></a></td>
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
                  <td colspan="2" class="tit15-333" height="33" bgcolor="e6e6df">Estas logueado/a como <i><?php echo($nombre); ?></i></td>
                </tr>
                <tr>
                    <th colspan="2" class="titulo_panel_cierre"><a href="logout.php" target="_self">Cerrar sesi&oacute;n</a></th>
			    </tr>
                <tr valign="middle"> 
                  <td colspan="2" class="texto" height="30"><img src="../../00t/00i/00.gif" width="420" height="1"></td>
                </tr>
                <tr>
                	<td colspan="2" class="titulo_form">Panel de control principal</td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <th colspan="2" class="titulo_panel"><a href="panel_control_becas.php" target="_self">Panel de Becas</a></th>
			    </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <th colspan="2" class="titulo_panel"><a href="panel_control_solicitudes.php" target="_self">Panel de Solicitudes</a></th>
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
                  <td class="texto"><a href="http://www.fadu.uba.ar/extension/index.html?" style="color:ff0040;">extensi&oacute;n: p&aacute;gina 
                    principal</a></td>
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
	</body>
</html>