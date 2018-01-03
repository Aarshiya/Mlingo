<?php

	$servername = "localhost";
	$username = "root";				//your mysql username
	$password = "mysql568";		//your mysql password
	$dbname = "MOVIES";				//your database name

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//echo "Connected successfully";
		//session_start() ;
		
	}
?>

