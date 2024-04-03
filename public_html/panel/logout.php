<?php
	// FINALIZACION  DE UNA SESION
	include("validacion.php");
	$nombre=$_SESSION['nombre'];
	header("refresh:3;url=../solicitud_de_becas_form.php");
?>
<html>
	<head>
        <link href="../css/plantilla_becas.css" rel="stylesheet" type="text/css">
    </head>
	<body style="text-align:center;">
		<div style="width:400px; padding:12px; text-align:center; background-color:#f00; color:#fff;
		font-weight:bold; margin:auto; border:#300; solid:1px;">Tu sesi&oacute;n est&aacute; cerrada. Muchas gracias.</div>
		<?php
		session_destroy(); //SI O SI ANTES DE DESTRUIR LA SESION, DEBO INVOCARLA CON SESSION_START . Esta llamada en "validacion.php"
		?>
	</body>
</html>
