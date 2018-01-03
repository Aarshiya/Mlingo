<?php
	include("conn.php");
	$id = $_GET['id'];
	session_start();

	echo $id;
	//$table = $_GET['table'];

	if (isset($_POST['submit'])) 
	{
		$Title = $_POST['Title'];
		$Language = $_POST['Language'];
		$Genre = $_POST['Genre'];
		$Duration = $_POST['Duration'];
		$ReleaseDate = $_POST['ReleaseDate'];
		$Rating = $_POST['Rating'];
		echo $_SESSION['MID'];

		$filename = $_FILES["fileToUpload"]["name"];
		$target_dir = "/var/www/html/img/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$file_loc = $_FILES['fileToUpload']['tmp_name'];
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		//echo $filename." ".$file_loc;
		echo $mid;
		

		$query = "UPDATE Movies SET Title = '" . $Title . "', Language='" . $Language . "', Genre='" . $Genre . "', Duration='" . $Duration . "', ReleaseDate='" . $ReleaseDate . "', Rating='" . $Rating . "', Image='" . $filename . "' where Mid='" . $id . "' ";
		
			if($conn->query($query))
			{
				if(move_uploaded_file($file_loc,$target_file))
			 	{
				 	echo "File Uploaded";
				 	header("location:DisplayMovies.php");		 	
			 	}
				echo "data updated";
			}
			else
			{
				echo $conn->error;
			}
	}
?>


