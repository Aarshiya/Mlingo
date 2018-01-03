<?php
	include("conn.php");
	$id = $_GET['id'];

	//echo $id;
	$table = $_GET['table'];
	$query = "DELETE FROM $table where Mid=$id";
	$conn->query($query);
	header("Location:DisplayMovies.php");
?>