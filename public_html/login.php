<?php
$titulo="LOGIN";
$usuario_login=$_POST['usuario_login'];
$clave_login=$_POST['clave_login'];
$l_ok = 0;
	include("./conexion/conexion.php");
		$consulta = "select * from usuarios where login_usuario='$usuario_login' and pw_usuario='$clave_login'";
		$resultado = mysql_query($consulta);
		$cantidad = mysql_num_rows($resultado);
		if($cantidad == 1)
			{
			//rutina de autenticacion
			$fila=mysql_fetch_array($resultado);
			session_start();
			$_SESSION[login]="ok";
			$_SESSION[nombre]=$fila[nombre_usuario];
			$l_ok = 1;
			
			header("refresh:3;url=./panel/panel_control.php");
			}
		else
			{
			header("Location:./login_form.php?error=1");
			}
?>
<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		<!-- esto es una iso donde  estan todos los caracteres que no estan en ingles, espanol, portugues, etc -->
    <link href="./css/plantilla.css" rel="stylesheet" type="text/css">
	</head>
	<body style="text-align:center;">
		<div style="width:400px; padding:12px; text-align:center; background-color:#f00; color:#fff;
		font-weight:bold; margin:auto; border:#300; solid:1px;">
			Acceso permitido, redirigiendo al panel principal...
		</div>
        <?php
			//ACTUALIZA LA ULTIMA FECHA DE CONEXION
			if ($l_ok == 1){
					$fecha_hoy = date("Y-m-d");
					$upd_fec_conex="update usuarios set fecha_ult_conex_usuario='$fecha_hoy' where login_usuario='$usuario_login' and pw_usuario='$clave_login' LIMIT 1;";
				mysql_query($upd_fec_conex);
			}
		mysql_close();
	?>
	</body>
</html>