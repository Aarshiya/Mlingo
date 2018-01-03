<?php
    include("conn.php");
	session_start();

	$query1 = "SELECT Title, Image, Rating FROM Movies ORDER BY Rating DESC LIMIT 5 ";

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Mlingo|Home</title>
		<link rel="shortcut icon" href="../img/favicon.ico" />
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
		<style>

		body
		{
			background-color: black;
			font-family: "Raleway", sans-serif;
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
				background-color: blue;
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
			background-color: black;
			color: blue;
			text-decoration: none;
		 }

		 li a.active
		 {
				background-color: blue;
				color: white;
		 }


		.mySlides 
		{
			display:none;
			margin: auto;
			max-width: 100%;
			height: 500px;
		}
		.Slideshow
		{
			width: 100%;
			height: 500px;
			z-index: -1;
		}

		input[type=text] 
		{
		    width: 130px;
		    box-sizing: border-box;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		    font-size: 16px;
		    background-color: white;
		    background-image: url('searchicon.png');
		    background-position: 10px 10px; 
		    background-repeat: no-repeat;
		    padding: 12px 20px 12px 40px;
		    -webkit-transition: width 0.4s ease-in-out;
		    transition: width 0.4s ease-in-out;
		}

		input[type=text]:focus 
		{
		    width: 100%;
		}
		 div.gallery {
		    margin: 30px;
		    border: 1px solid #ccc;
		    float: center;
		    width: 180px;
		}

		div.gallery:hover {
		    border: 1px solid #777;
		}

		div.gallery img {
		    width: 100%;
		    height: 150px;
		}

		div.desc {
		    padding: 15px;
		    text-align: center;
		    color: white;
		    font-size: 20px;
		}

		 img
		 {
		       float: center;
		       height: 200px;
			   width: auto;
		 }

    	 
    	 .box
		 {
				border: 3px solid #f1f1f1 ;
				padding-top: 30px ;
		
				padding-bottom: 20px ;
				padding-left: 0px ;
				background-color: white ;
				margin:6px ;
				font-size: 20px;

		 }
		 .table
		 {
		 	background-color: transparent;
		 	border: none !important;
		 }

		 header
		 {
		 	background-color: red;
		 	color: white;
		 }
		 h1
		 {
		 	padding: 50px;
		 }

		 #Ad
		 {
		 	padding: 20px;
		 	font-size: 25px;
		 }
		footer
    	{
    		background-color: #F8F8F8;
    		color: #000053;
    	}
    	 #foot
		 {
		 	text-align: center;
		 	margin: 20px;
		 	font-size: 21px;
		 	text-decoration: none;
		 	text-align: center;
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
		<div class="container-fluid">
		<table>
			<tbody>
				<tr>
					<div class="Slideshow">
			            <img class="mySlides" src="img/airlift.png" style="width:100%">
						<img class="mySlides" src="img/annabelle.jpg" style="width:100%">
						<img class="mySlides" src="img/bangbang.jpg" style="width:100%">
						<img class="mySlides" src="img/2states1.jpg" style="width:100%">
						<img class="mySlides" src="img/3idiots1.jpg" style="width:100%">
						
						
						<script>
							var myIndex = 0;
							carousel();

							function carousel() {
								var i;
								var x = document.getElementsByClassName("mySlides");
								for (i = 0; i < x.length; i++) {
								   x[i].style.display = "none";  
								}
								myIndex++;
								if (myIndex > x.length) {myIndex = 1}    
								x[myIndex-1].style.display = "block";  
								setTimeout(carousel, 2000); // Change image every 2 seconds
							}
						</script>
					</div>
				</tr>
				<tr>
					<header>
						<h1 align="center">TOP 5 RATED MOVIES</h1>
					</header>
		        	<div class="row">
		            <table class=" table-responsive ">
												
					<?php 
						$result1 = $conn->query($query1);
						$row1 = array();
						while ( $res = $result1->fetch_assoc()) 
						{
							$row1[] = $res;
						}
					?>
								
						 <tr>
							<td>
								<div class="gallery">
									<img src="img/<?php echo $row1[0]['Image'] ;?>" style="width:100%;height:150px;">
							    	<div class="desc"><?php echo "<b>".$row1[0]['Title']."<br>"; ?>
							    		<?php echo "<b>Rating: ".$row1[0]['Rating']."<br>"; ?>
							    	</div>
							   </div>
							</td>
							<td>
								<div class="gallery">
								   	<img src="img/<?php echo $row1[1]['Image'] ;?>" style="width:100%;height:150px;">
								  	<div class="desc"><?php echo "<b>".$row1[1]['Title']."<br>"; ?>
								  		<?php echo "<b>Rating: ".$row1[1]['Rating']."<br>"; ?>
								  	</div>
								</div>
							</td>
							<td>
								<div class="gallery">
									<img src="img/<?php echo $row1[2]['Image'] ;?>" alt="Img" style="width:100%;height:150px;">
								  	<div class="desc"><?php echo "<b>".$row1[2]['Title']."<br>"; ?>
								  		<?php echo "<b>Rating: ".$row1[2]['Rating']."<br>"; ?>
								  	</div>
								</div>		
							</td>
							<td>
								<div class="gallery">
									<img src="img/<?php echo $row1[3]['Image'] ;?>" alt="Img" style="width:100%;height:150px;">
								  	<div class="desc"><?php echo "<b>".$row1[3]['Title']."<br>"; ?>
								  		<?php echo "<b>Rating: ".$row1[3]['Rating']."<br>"; ?>
								  	</div>
								</div>		
							</td>
							<td>
								<div class="gallery">
									<img src="img/<?php echo $row1[4]['Image'] ;?>" alt="Img" style="width:100%;height:150px;">
								  	<div class="desc"><?php echo "<b>".$row1[4]['Title']."<br>"; ?>
								  		<?php echo "<b>Rating: ".$row1[4]['Rating']."<br>"; ?>
								  	</div>
								</div>		
							</td>							
						</tr>		 
		          	</table>
		            </div>
				</tr>
			</tbody>
		</table>
		</div>		
			
		
		<footer>
			<a href="Advertise.html" id="foot">Advertise With Us</a>
			<a href="Contact.html" id="foot">Contact Us</a>
		</footer>
		
	</body>
</html>
