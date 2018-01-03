<?php

	include("conn.php");
	session_start(); 
	$page = $_GET['page'];

	if($_SESSION['LOGGED_IN'] == 1)
	{
		if (isset($_POST['submit'])) 
		{
		    $MID = $_SESSION['MID'];
		    $UID = $_SESSION['UID'];
		    if(isset($_POST['star1']))
		    {
		    	$Stars = $_POST['star1'];
		    }
			if(isset($_POST['star2']))
		    {
		    	$Stars = $_POST['star2'];
		    }
		    if(isset($_POST['star3']))
		    {
		    	$Stars = $_POST['star3'];
		    }
			if(isset($_POST['star4']))
		    {
		    	$Stars = $_POST['star4'];
		    }
		    if (isset($_POST['Comment'])) 
			{
			   $Comment = $_POST[ 'Comment' ];
			}
			$sql = "select * from Rating where MID='$MID' AND UID='$UID'";
			$result=$conn->query($sql);
			$row = $result->fetch_assoc();	
			$count=mysqli_num_rows($result);
			echo "$MID  ";
			echo "$UID  ";
			echo "$Stars  ";

			if($count==1)
			{
				$query = "UPDATE Rating set Stars='$Stars', Comment='$Comment',Date=NOW() where MID=$MID AND UID=$UID ";	
			}
			else
			{
				$query = "INSERT INTO Rating (UID,MID,Stars,Comment,Date) VALUES ('" . $UID . "','" . $MID . "','" . $Stars . "', '" . $Comment . "',NOW())";
			} 

			if ($conn->query($query)) 
			{
			    echo "Rated successfully!";
				$query2="UPDATE Movies set Rating=(select avg(Stars) from Rating where Mid = $MID) where Mid = $MID" ;
				if($conn->query($query2))
				{
					echo "Rating updated";
					if($page == 'Romantic')
					{
						header('Location:Romantic.php') ;
					}
					if($page == 'Action')
					{
						header('Location:Action.php') ;
					}
				}
				else
				{
					echo $conn->error;
				}
				
			} 
			else
			{
			    echo $conn->error;
			}
		}
	}
	else
	{
		//echo "Please Log In First. Redirecting you to Login Page...";
		//echo "<script>setTimeout(\"location.href = 'LogInPage.php';\",3000);</script>";
	}	
?>

