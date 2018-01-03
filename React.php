<?php

	include("conn.php");
	session_start();
	$page = $_GET['page'];
	$tid = $_GET['tid'];

	if($_SESSION['LOGGED_IN'] == 1)
	{
		if (isset($_POST['submit']))
		{
			$UID = $_SESSION['UID'];

			$sql = "select * from React where MID='$MID' AND TID='$tid'";
			$result=$conn->query($sql);
			$row = $result->fetch_assoc();	
			$count=mysqli_num_rows($result);

			if($page == 'trailer')
			{	
				if($count==1)
				{
					$query = "UPDATE React set Stars='$Stars', Comment='$Comment',Date=NOW() where MID=$MID AND UID=$UID ";	
				}
				else
				{
					$query = "INSERT INTO Rating (UID,MID,Stars,Comment,Date) VALUES ('" . $UID . "','" . $MID . "','" . $Stars . "', '" . $Comment . "',NOW())";
				} 
			}
		}
	}
?>
