<?php

include("conn.php");

if (isset($_POST['submit'])) 
{
	$News = $_POST['News'];
	$target_dir = "/var/www/html/img/News/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$file_loc = $_FILES['fileToUpload']['tmp_name'];
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$filename = $_FILES["fileToUpload"]["name"];

	$query = "INSERT INTO NewsFeed ( Image,News,DateTime) values ( '" . $filename . "','" . $News ."', NOW())";
	
	if($conn->query($query))
	{
		 if(move_uploaded_file($file_loc,$target_file))
		 {
		 	echo "File Uploaded";
		 	header("location:Newsfeed.php");		 	
		 }
		 //echo "data inserted";
	}
	else
	{
			echo $conn->error;
	}
}

?>
