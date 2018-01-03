<?php

include("conn.php");

if (isset($_POST['submit'])) 
{
	$Title = $_POST['Title'];
	$Language = $_POST['Language'];
	$Genre = $_POST['Genre'];
	$Duration = $_POST['Duration'];
	$ReleaseDate = $_POST['ReleaseDate'];
	$Rating = $_POST['Rating'];

	$target_dir = "/var/www/html/img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$file_loc = $_FILES['fileToUpload']['tmp_name'];
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$filename = $_FILES["fileToUpload"]["name"];

	$query = "INSERT INTO Movies (Title, Language, Genre, Duration, ReleaseDate, Rating, Image) values ('" . $Title . "', '" . $Language . "', '" . $Genre . "', '" . $Duration . "', '" . $ReleaseDate . "', '" . $Rating . "', '" . $filename . "')";
	
		if($conn->query($query))
		{
			 if(move_uploaded_file($file_loc,$target_file))
			 {
			 	echo "File Uploaded";
			 	header("location:DisplayMovies.php");		 	
			 }
			 //echo "data inserted";
		}
		else
		{
				echo $conn->error;
		}
	
	

}
	
	

    
//echo $_FILES['image']['tmp_name'];
//$image_name = addslashes($_FILES['image']['name']);
//$image_size = getimagesize($_FILES['image']['tmp_name']);

	//$folder="./img/".$Image;
	//move_uploaded_file($_FILES["Image"]["tmp_name"],$folder);
	


?>
