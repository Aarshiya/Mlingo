<?php

include("conn.php");
session_start();
if (isset($_POST['submit'])) 
{
	$Company = $_POST['Company'];
	$Ad_Type = $_POST['Ad_Type'];
	$Duration=$_POST['Duration'];
	$Advertiser = $_POST['Advertiser'];
	$Contact_1 = $_POST['Contact_1'];
	$Contact_2 = $_POST['Contact_2'];
	$Email=$_POST['Email'];
	$_SESSION['Company'] = $Company;
	//$AdText = $_POST['Ad_Text']; 

	echo $Company;
	
	$query1 = "INSERT INTO Comm_Ad (CompanyName, Ad_Type, Duration, AdText, AdImage) values ('" . $Company . "' , '" . $Ad_Type . "' , '" . $Duration . "' , 'NULL', 'NULL')";

    $query2="INSERT INTO Comm_Ad2 (Contact_1,Contact_2,Email,AdvertiserName, AID) values ('" . $Contact_1 . "' , '" . $Contact_2 . "' , '" . $Email . "' , '" . $Advertiser . "', (SELECT Comm_Ad.AID from Comm_Ad where Comm_Ad.CompanyName = '" . $Company . "'))";
    
	$query3 = "INSERT INTO Comm_Ad3 (AID, Duration, Amount,Date) values ((SELECT Comm_Ad.AID from Comm_Ad where Comm_Ad.CompanyName = '" . $Company . "'), '" . $Duration . "' ,0, NOW())";
	
	$query4 = "UPDATE Comm_Ad3 SET Amount = ('" . $Duration . "' * (select Amount_Per_Day.Amount from Amount_Per_Day where Ad_Type = '" . $Ad_Type . "')) where AID = (SELECT Comm_Ad.AID from Comm_Ad where Comm_Ad.CompanyName = '" . $Company . "')";

	
	if($conn->query($query1))
	{
		header("location:DisplayAdver.php");
		echo "data inserted";
	}
	else
	{
		  echo "some error";
	}
	if($conn->query($query2))
	{
		header("location:DisplayAdver.php");
		echo "data inserted";
	}
	else
	{
		  echo "some error";
	}
	if($conn->query($query3))
	{
		header("location:DisplayAdver.php");
		echo "data inserted";
	}
	else
	{
		  echo "some error";
	}

if($conn->query($query4))
	{
		header("location:DisplayAdver.php");
		echo "data inserted";
	}
	else
	{
		  echo "some error";
	}
}
?>
