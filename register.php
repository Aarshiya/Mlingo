<?php

	include("conn.php");
   
	if (isset($_POST['submit'])) 
	{
	    $FName = $_POST['FName'];
	    $LName = $_POST['LName'];
	    $Age = $_POST['Age'];
	    $Email = $_POST['Email'];
	    $PWD = $_POST['PWD'];
	    $Location = $_POST["Location"];
	    
		$query = "INSERT INTO User (FName,LName,Age,Email,PWD,Location) VALUES ('" . $FName . "','" . $LName . "','" . $Age . "','" . $Email . "','" . $PWD . "','" . $Location . "')";

		if ($conn->query($query)) 
		{
		    //echo "SIGNED UP successfully!";
			header('Location:Home.php') ; 
        } 
		else if ($conn->error == "Email already registered!")
		{
			echo "Account on this email already exists. Redirecting you to Login Page...";
			echo "<script>setTimeout(\"location.href = 'LogInPage.php';\",3000);</script>";
		}
		else
		{
			echo $conn->error;
		}
	}
?>

