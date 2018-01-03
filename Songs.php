<?php
include("conn.php");
SESSION_START();
$tbl_name="Songs";
$query = "SELECT * FROM $tbl_name  ";
		
			$result = $conn->query($query);
			$row = array();
			while ( $res = $result->fetch_assoc()) 
			{
				$row[] = $res;
			}						
?>


<html>
<head>
	<title>Mlingo|Songs</title>
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<style>
	 #foot
		 {
		 	text-align: center;
		 	padding: 20px;
		 	font-size: 15px;
		 	text-decoration: none;
		 	color: white;
		 	text-align: center;
		 }
		ul 
		{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			font-size:20px;
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
			background-color: red;
		}
body {
    background-color: black;
	color:white;
}
form{
	font-style: normal;
	font-size: 30px;
}
</style>
</head>
<body>
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
					<li><a href="User.php"><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['NAME'];?></a></li>
					<li><a href="LogOut.php">Log Out</a></li>
<?php	
				}
				else
				{
?>
					<li><a href="LogInPage.php">Login</a></li>
					<li><a href="try1.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<?php                
				}	
?>							
				</div>
				</ul>
		  </div>
		</nav>

			<div class="col-md-2"></div>
			<div class="col-md-7">
				<h1><?php echo "<b>"."".$row[0]['Title']."<br>"; ?></h1>
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/3tmd-ClpJxA" frameborder="0" allowfullscreen></iframe><br>
				 <?php echo "<b>"."Singer:".$row[0]['Singer']."<br>"; ?>
				 <?php echo "<b>"."Movie/Album:".$row[0]['Album']."<br>"; ?>

				<h1><?php echo "<b>"."".$row[1]['Title']."<br>"; ?></h1>
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/kJQP7kiw5Fk" frameborder="0" allowfullscreen></iframe><br>
				 <?php echo "<b>"."Singer:".$row[1]['Singer']."<br>"; ?>
				 <?php echo "<b>"."About:".$row[1]['Album']."<br>"; ?>
				 
				 
				 <h1><?php echo "<b>"."".$row[2]['Title']."<br>"; ?></h1>
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/JGwWNGJdvx8" frameborder="0" allowfullscreen></iframe><br>
				 <?php echo "<b>"."Singer:".$row[2]['Singer']."<br>"; ?>
				 <?php echo "<b>"."About:".$row[2]['Album']."<br>"; ?>
				 
			</div>
			 <div class="col-md-3">
			 	<?php
                		$query3 = "SELECT AdImage from Comm_Ad WHERE AdImage IS NOT NULL AND AdImage!='' ";
                	?>
                	<table>
                		<colgroup>
                			<col class = "Ad">
                		</colgroup>
                		<tbody>
						<?php
						$result = $conn->query($query3);
						while ( $res = $result->fetch_assoc()) 
						{ ?>

							<tr>
                				<img src="img/Ads/<?php echo $res['AdImage'] ?>" style="width:100%">
                			</tr>

				<?php	}
						?>                			
 				<?php
 					$query4 = "SELECT CompanyName,AdText from Comm_Ad where AdText IS NOT NULL ";
 					$result = $conn->query($query4);
 					while ( $res = $result->fetch_assoc()) 
						{ ?>

							<h3 style="background-color: #000053;"><?php echo $res['CompanyName']."<br>".$res['AdText'] ?></h3>

				<?php	}
						?>
                		</tbody>
                	</table>
			 </div> 
  
</body>
</html>