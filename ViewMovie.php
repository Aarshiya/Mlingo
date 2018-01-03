<?php 
    include("conn.php");
	session_start();
	$viewmid = $_GET['id'];
	$query = "SELECT * FROM Movies where Mid=$viewmid ";
	$query1 = "SELECT * FROM Rating WHERE Mid=$viewmid AND Comment IS NOT NULL AND Comment!=''";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- Latest compiled and minified CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

		<script type="text/javascript">
			function myFunction(jsvar) 
			{
				document.cookie = 'MIDCOOKIE'+"="+jsvar;
				$.post("SetMid.php");
			}
		</script>

    	<style>

		 img
		 {
		       float: center;
		       opacity: 1;
		       height: 480px;
		       width: 480px;
		 }

		 #AdImg
		 {
		 	float: center;
		 	height: 200px;
		 }

    	 ul 
		 {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				font-size:25px;
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
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				color: white;
		 }

		 li a:hover 
		 {
				background-color: red;
				color: white;
		 }

		 li a.active
		 {
				background-color: blue;
				color: white;
		 }
		 body
		 {
				background-color: black ;
				font-family: "Raleway", sans-serif;
				color:white;
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
		 	padding-top: 20px;
		 }

		h3
		{
			background-color: white;
			font-style: italic;
			font-family: "Times New Roman", Times, serif;
			padding: 10px;
			color: black;
		}
		.Hits
		{
			font-style: italic;
		}
		#username
		{
			color: blue;
		}
		</style>
		</head>
		<body>		    
		<nav class="navbar">
		  <div class="container-fluid">
				<ul class="nav navbar-nav nav-pills">
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
					<li style="margin-left:7cm;"><a href="LogOut.php">Log Out</a></li>
					<li><a href="User.php"><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['NAME'];?></a></li>

<?php	
				}
				else
				{
?>
					<li style="margin-left:7cm;"><a href="LogInPage.php">Login</a></li>
					<li><a href="try1.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<?php                
				}	
?>							
				</div>
				</ul>
		  </div>
		</nav>

		<?php 
			$result = $conn->query($query);
			$row = $result->fetch_assoc();
			
			$result1 = $conn->query($query1);
		?>
        <div class="container-fluid">
            <div class="row">
            	<div class="col-md-2"></div>
				<div class="col-md-7">
					<h1><?php echo "<b>"."".$row['Title']."<br>"; ?></h1>
					<img src="../img/<?php echo $row['Image'] ;?>" alt="Image">
					<?php echo "<br>Genre: ".$row['Genre']."<br>"; ?>
					 <?php echo "Duration: ".$row['Duration']."<br>"; ?> 
					 <?php echo "Release Date: ".$row['ReleaseDate']."<br>"; ?>	

					 <h4><?php echo "Rating: <b>".$row['Rating']."</b>";?></h4>
					<?php 
						$query2 = "SELECT Count(Stars) AS Hits FROM Rating WHERE MID=$viewmid";
						$result2 = $conn->query($query2);
						$data = $result2->fetch_assoc();?>
						<div class="Hits"><?php echo "Based on ".$data['Hits']." Ratings";
					?></div>	
					

					<p>Comments - </p>
					<?php
					while ( $res = $result1->fetch_assoc()) 
					{ 
						$uid = $res['UID'];
						$query2 = "SELECT FName, LName FROM User where UID=$uid ";
						$result2 = $conn->query($query2);
						$res2 = $result2->fetch_assoc();
					?>
						<p><span id="username"><?php echo$res2['FName']." ".$res2['LName'].": "?></span><?php echo $res['Comment']; ?></p>
						
			<?php	}?>	 
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
                				<img src="img/Ads/<?php echo $res['AdImage'] ?>" style="width:100%; height: 200px;">
                			</tr>

				<?php	}
						?>                			
 				<?php
 					$query4 = "SELECT CompanyName,AdText from Comm_Ad where AdText IS NOT NULL ";
 					$result = $conn->query($query4);
 					while ( $res = $result->fetch_assoc()) 
						{ ?>

							<h3 style="background-color: #000053; color: white;"><?php echo $res['CompanyName']."<br>".$res['AdText'] ?></h3>

				<?php	}
						?>
                		</tbody>
                	</table>
                </div>
        </div>

        <footer>
				
			<a href="Advertise.html"><h3>Advertise With Us</h3></a>
							  	
		</footer> 

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
