<?php 
include("conn.php");
session_start();
$uid = $_SESSION['UID'];
$query = "SELECT * from User where UID=$uid ";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$query1 = "SELECT * from Rating where UID=$uid ";
$result1 = $conn->query($query1);


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row['FName'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		ul 
		{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			font-size:18px;
			top: 0;
			width: 100%;
			
		}

		li 
		{
			float: left;
		}

		li a 
		{
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover 
		{
			text-decoration: none;
			background-color: #E0E0E0;
			color: #004C99;
		}
		body
		{
		  background-image: url("loginback.jpg") ;
			font-family: "Raleway", sans-serif;
		}
		.button 
		{
		    background-color: red; 
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius:12px;
		 }

		 p
		 {
		 	font-size: 20px;
		 }

		 table,th,td,tr
		 {
		 	background-color: white;
		  	text-align: center;
		 }


		 .bold
		 {
		 	 color: blue ;
		 	 font-size: 25px ;

		 }
		 h3
		{
			background-color: black;
			color: white;
			font-style: bold italic;
			font-family: "Times New Roman", Times, serif;
			padding: 10px;
		}

		footer
		{
			background-color: black;
			font-color: white;
		 	height: 40px;
		}
		#foot
		 {
		 	text-align: center;
		 	padding: 20px;
		 	font-size: 15px;
		 	text-decoration: none;
		 	color: white;
		 	text-align: center;
		 }
		</style>
</head>
<body>
	<div class="container">
		<nav class="navbar">
		  <div class="container-fluid">
				<ul class="nav navbar-nav nav-pills navbar-inverse">
				    <li><a href="Home.php"><img src="../img/Mlingo.png" style="width:50px;height:50px; ></a></li>
					<li><a href="Home.php">MLINGO</a></li>
					<li><a href="Action.php"><h4>ACTION</h4></a></li>
					<li><a href="Romantic.php"><h4>ROMANTIC</h4></a></li>
					<li><a href="Trailer.php"><h4>Trailers</h4></a></li>
					<li><a href="Songs.php"><h4>Songs</h4></a></li>
					<li><a href="Newsfeed.php"><h4>Trending Now!</h4></a></li>
				
				<div class="navbar-right">
<?php 
				if($_SESSION['LOGGED_IN']==1)
				{
?>
					<li style="margin-left:4cm;"><a href="LogOut.php">Log Out</a></li>
					<li><a href="User.php"><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['NAME'];?></a></li>

<?php	
				}
				else
				{
?>
					<li style="margin-left:4cm;"><a href="LogInPage.php">Login</a></li>
					<li><a href="try1.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<?php                
				}	
?>							
				</div>
				</ul>
		  </div>
		</nav>

		<div class="col-md-1"></div>
		<div class="col-md-8">
			<p align="center"><img src="../img/User.jpg" height="150px" width="150px"></p>
			<h1 align="center" style="color: white;"><?php echo "<b>".$row['FName']." ".$row['LName']."</b>" ;?></h1>
			<h2 align="center" style="color: white;"><?php echo "Age: ".$row['Age']."<br>"; ?>
				<?php echo $row['Email']."<br>"; ?>
				<?php echo "Location: ".$row['Location']."<br>"; ?>	
			</h2>

			
				<table class="table table-bordered table-responsive table-hover">
					<thead>
						<th>Movie</th>
						<th>Stars</th>
						<th>Comment</th>
						<th>Date</th>
					</thead>
					<tbody>
						<?php
						while ( $res = $result1->fetch_assoc()) 
						{ 
							$mid = $res['MID'];
							$query2 = "SELECT Title FROM Movies where Mid=$mid ";
							$result2 = $conn->query($query2);
							$res2 = $result2->fetch_assoc();
						?>
						<tr>
							<td><?php echo $res2['Title']; ?></td>
							<td><?php echo $res['Stars']; ?></td>
							<td><?php echo $res['Comment']; ?></td>
							<td><?php echo $res['Date']; ?></td>
						</tr>
						<?php	}?>	
					</tbody>
				</table>
					
		
		</div>
		<div class="col-md-3"></div>
	</div>
	
	<footer>
		<a href="Advertise.html" id="foot">Advertise With Us</a>
		<a href="Contact.html" id="foot">Contact With Us</a>
	</footer>

</body>
</html>