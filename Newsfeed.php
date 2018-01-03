<?php 
    include("conn.php");
	$tbl_name="NewsFeed";
	session_start();
	$query = "SELECT * FROM $tbl_name ";
	$result = $conn->query($query);
	$row = array();
	while ( $res = $result->fetch_assoc()) 
	{
		$row[] = $res;
	}
  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mlingo|Newsfeed</title>
        <link rel="shortcut icon" href="../img/favicon.ico" />
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- Latest compiled and minified CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

		
    	<style>

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
			background-color: #F8F8F8;
			text-decoration: none;
			border-radius: 5px;
		}
		body {
		    background-color: black;
			color:black;
			font-family: "Raleway", sans-serif;
		}

		 img
		 {
		       float: center;
		       height: 200px;
			   width: auto;
		 }

		 form 
		{
	     	border: 3px solid #f1f1f1;
            padding-top: 20px;
	     	padding-right: 30px;
	     	padding-bottom: 20px;
	     	padding-left: 30px;
            background-color: white;
            margin:100px;
			border-radius:12px;
        }
        p
        {
        	font-size: 23px;
        }	
        #datetime
        {
        	font-size: 15px;
        	color: grey;
        	font-style: italic;
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
            <div class="row">
                <div class="col-md-9">
					<form>
						<table>
							<tr>
								<td> <img src="../img/News/<?php echo $row[0]['Image']?>" alt="Image" hspace="30" vspace="30"> </td>
								<td><p><?php echo $row[0]['News']."<br>"; ?> <span id="datetime"><?php echo $row[1]['DateTime']; ?></span> 
								</p></td>
							</tr>
						</table>
					</form>
					<form>
						<table>
							<tr>
								<td><img src="../img/News/<?php echo $row[1]['Image']?>" alt="Image" hspace="30" vspace="30"></td>
								<td><p><?php echo $row[1]['News']."<br>"; ?> <span id="datetime"><?php echo $row[1]['DateTime']; ?></span>
								</p></td>
							</tr>
						</table>
					</form>
					<form>
						<table>
							<tr>
								<td><img src="../img/News/<?php echo $row[2]['Image']?>" alt="Image" hspace="30" vspace="30"></td>
								<td><?php echo "<b>".$row[2]['News']."<br>"; ?></td>
							</tr>
						</table>
					</form>
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

							<h3 style="background-color: #000053; color: white;"><?php echo $res['CompanyName']."<br>".$res['AdText'] ?></h3>

				<?php	}
						?>
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
    <footer>
		<a href="Advertise.html" id="foot">Advertise With Us</a>
		<a href="Contact.html"  id="foot">Contact With Us</a>
	</footer>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
