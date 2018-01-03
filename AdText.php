<?php
include("conn.php");
session_start();

if(isset($_POST['submit']))
{
	$Company = $_SESSION['Company'];	

	if(isset($_POST['Adtext']))
	{
		$Text = $_POST['Adtext'];
		$query = "UPDATE Comm_Ad SET AdText = '" . $Text . "', AdImage = 'NULL' where CompanyName = '" . $Company . "' ";
	}

	//if(isset($_POST['fileToUpload']))
	{
		echo 'hiifile';
		$target_dir = "/var/www/html/img/Ads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$file_loc = $_FILES['fileToUpload']['tmp_name'];
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$filename = $_FILES["fileToUpload"]["name"];

		echo "Filename: ".$filename;

		$query1 = "UPDATE Comm_Ad SET AdImage='" . $filename . "' where CompanyName = '" . $Company . "' ";
		
	}	


	if($conn->query($query))
	{
		echo 'inserted';
		header("location:payment1.html");
	}
	else
	{
		echo $conn->error;
	}

	if($conn->query($query1))
	{
		echo 'inserted';
		if(move_uploaded_file($file_loc,$target_file))
		{
		 	echo "File Uploaded";
		 	header("location:payment1.html");		 	
		}
		//header('Location:DisplayAdver.php') ;
	}
	else
	{
		echo $conn->error;
	}
}

?>
