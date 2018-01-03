<?php
	session_start();
	unset($_session['Email']);
	unset($_session['PWD']);
	$_SESSION['LOGGED_IN'] = 0;
	session_destroy();
	header("location:Home.php");
	exit;
?>
