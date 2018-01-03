<?php
	include("conn.php");
	session_start() ;
	$tbl_name="User";

	if (isset($_POST['Email' ])) 
	{
		$myusername = $_POST[ 'Email' ];
	}
	if (isset($_POST['PWD' ])) 
	{
	   $mypassword = $_POST[ 'PWD' ];
	}

	$sql="select * from $tbl_name where PWD='$mypassword' AND Email='$myusername'";

	$result=$conn->query($sql);
	$row = $result->fetch_assoc();	
	$count=mysqli_num_rows($result);


	if($count==1)
	{
		echo "LOGIN SUCCESSFUL";
		/*SESSION VARIABLES*/
		$_SESSION['LOGGED_IN'] = 1;
		$_SESSION['UID'] = $row['UID'];
		$_SESSION['NAME'] = $row['FName'];

		if($row['Email']=="admin@gmail.com" && $row['PWD']=="root123")
		{
			header('Location:Admin.html') ; 
			$_SESSION['ADMIN'] = 1;
		}
		else
		{
			header('Location:Home.php') ; 
		}
		session_start();
?>
	<ul class="nav navbar-nav navbar-right">
	<li class="divider-vertical"></li>
<?php

/*		if(isset($_SESSION['Fname'])) 
		{
			echo '<li><a href="#">Hello,'. $_SESSION["Fname"] . '</a></li>';
			echo '<li><a href="LogOut.php">Log Out</a></li>';
		}
		else 
		{
			//put login form or include here.
		}*/
		 
	}
	else
	{ 
	  $_SESSION['IncorrectPass'] = 1;
	  
	  
	  echo '<script type="text/javascript">';
	  echo 'alert("Incorrect Email or Password \n Go Back")';
	  echo '</script>';
	  header("Location: LogInPage.php");
	}
?>


