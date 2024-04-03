<?php
    session_start();
	$login_ok = $_SESSION['login'];
	if ($login_ok != "ok")
	{
		header("Location:../login_form.php?error=2");
	}
?>