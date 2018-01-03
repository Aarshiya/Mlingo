<?php

	include('conn.php');
	session_start();
	$page = $_GET['page'];

	if($page == 'Action')
	{
		include("Action.php");	
	}
	if($page == 'Romantic')
	{
		include("Romantic.php");
	}
	$_SESSION['MID'] = $row[$_COOKIE['MIDCOOKIE']]['Mid']; 
?>


