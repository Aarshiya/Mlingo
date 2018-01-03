<?php 
    include("conn.php");
	$tbl_name="Movies";
	session_start();
	$query = "SELECT * FROM $tbl_name where Genre like '%Action%' order by ReleaseDate desc ";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mlingo|Action</title>
        <link rel="shortcut icon" href="../img/favicon.ico" />
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
				$.post("SetMid.php?page=Action");
			}

			$(document).ready(function()
			{
			    $('[data-toggle="tooltip"]').tooltip();   
			});

			function LoginAlert()
			{
				var modal = document.getElementById('myModal');
				var btn = document.getElementById("myBtn");
				var span = document.getElementsByClassName("close")[0];
				btn.onclick = function() 
				{
	    			modal.style.display = "block";
				}
				span.onclick = function() 
				{
				    modal.style.display = "none";
				}
				window.onclick = function(event) 
				{
				    if (event.target == modal) 
				    {
				        modal.style.display = "none";
				    }
				}
			}
		</script>
		<script type="text/javascript">
			var modal = document.getElementById('myModal');
			var btn = document.getElementById("myBtn");
			var span = document.getElementsByClassName("close")[0];
			btn.onclick = function() 
			{
    			modal.style.display = "block";
			}
			span.onclick = function() 
			{
			    modal.style.display = "none";
			}
			window.onclick = function(event) 
			{
			    if (event.target == modal) 
			    {
			        modal.style.display = "none";
			    }
			}
		</script>

    	<style>

		 img
		 {
		    float: center;
		    height: 200px;
			width: 200px;
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
				background-blend-mode: saturation;
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
				color: red;
		 }
    	 .box
		 {
				border: 3px solid #f1f1f1 ;
				padding-top: 30px ;
				padding-right:50px ;
				padding-bottom: 20px ;
				padding-left: 50px ;
				background-color: white ;
				margin:6px ;
				font-size: 20px;

		 }
		 body
		 {
				background-image: url("canva.jpg") ;
				font-family: "Raleway", sans-serif;
		 }
		 div.stars
		 {
			    width: 270px;
			    display: inline-block;
		 }
	 
		 input.star
   		{ 
				display: none; 
		 }
	 
		 label.star
		 {
			    float: right;
			    padding: 10px;
			    font-size: 30px;
			    color: #444;
			    transition: all .2s;
		 }
		 
		 input.star:checked ~ label.star:before
		 {
			    content: '\f005';
			    color: #FD4;
			    transition: all .25s;
		 }
		 
		 input.star-15:checked ~ label.star:before
		 {
			    color: #FE7;
			    text-shadow: 0 0 20px #952;
		 }
		 
		 input.star-11:checked ~ label.star:before
		 { 
				color: #F62;
		 }
		 input.star-25:checked ~ label.star:before
		 {
			    color: #FE7;
			    text-shadow: 0 0 20px #952;
		 }
		 
		 input.star-21:checked ~ label.star:before
		 { 
				color: #F62;
		 }
		 
		 label.star:hover 
		 { 
				transform: rotate(-15deg) scale(1.3);
		 }
		 
		 label.star:before 
		 {
			   content: '\f006';
			   font-family: FontAwesome;
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

		 .table
		 {
		 	background-color: white;
		 	opacity: 0.75;
		 }

		 footer
		 {
		 	background-color: black;
		 	font-color: white;
		 	height: 40px;

		 }
		 video#fullscreen
		{
			position: fixed;
			right: 0;
			bottom: 0;
			height: auto;
			width: auto;
			min-height: 100%;
			min-width: 100%;
			z-index: -100;
			background-size: cover;	
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
		 h3
		{
			background-color: black;
			color: white;
			font-style: bold italic;
			font-family: "Times New Roman", Times, serif;
			padding: 10px;
		}

		.modal {
		    display: none; 
		    position: fixed; 
		    z-index: 1; 
		    left: 0;
		    top: 0;
		    width: 100%; 
		    height: 100%; 
		    overflow: auto; 
		    background-color: rgb(0,0,0); 
		    background-color: rgba(0,0,0,0.4); 
		}

		.modal-content {
		    background-color: #fefefe;
		    margin: 15% auto; 
		    padding: 20px;
		    border: 1px solid #888;
		    width: 40%; 
		    height: 25%;
		    font-size: 18px;
		}

		
		.close {
		    color: #aaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: black;
		    text-decoration: none;
		    cursor: pointer;
		}
     
		</style>
		</head>
		<body>

		<video autoplay loop muted preload="auto" id="fullscreen" poster="../img/actionPoster.jpg">
			<source src="/var/www/html/big_buck_bunny.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
			<source src="/var/www/html/big_buck_bunny.webm" type='video/webm;codecs="vp8, vorbis"' />
			<p>Your browser does not support video!</p>
		</video>

		<div id="myModal" class="modal">
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <p style="text-align: center; ">Login and enjoy Rating..</p>
		    <a style="float: left ;" href="Action.php">Cancel</a>
		    <a style="float: right ;" href="LogInPage.php">Login</a>
		  </div>

		</div>
		    
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
		<br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
				
                    <table class="table table-bordered table-responsive table-hover">
						<colgroup>
							<col class="ChartPoster">
							<col class="ChartTitle">
							<col class="MRSRating">
							<col class="YourRating">
						</colgroup>
						<thead>
							<tr>
								<th></th>					
								<th>Information</th>
								<th>Mlingo Rating</th>
								<th>Rate</th>					
								<th>Your Rating</th>
							</tr>					
						</thead>
						<?php 
							$result = $conn->query($query);
							$row = array();
							while ( $res = $result->fetch_assoc()) 
							{
								$row[] = $res;
							}
						?>
						<tbody>
							<tr>
								<?php $midvar = $row[0]['Mid'];?>
								<td><img src="img/<?php echo $row[0]['Image']; ?>" alt="Image" ></td>
								<td>
									 <a href="ViewMovie.php?id=<?php echo $midvar;?>"><h4><?php echo "<b>".$row[0]['Title']."<br>"; ?></h4></a>
									 <?php echo "Genre:".$row[0]['Genre']."<br>"; ?>
									 <?php echo "Duration:".$row[0]['Duration']."<br>"; ?> 
									 <?php echo "Release_date:".$row[0]['ReleaseDate']."<br>"; ?>
									 <script type="text/javascript"> jsvar = 0;</script>
								</td>
								<td>
									<h4><?php echo "Rating: <b>".$row[0]['Rating']."</b>";?></h4>
									<?php 
									$query2 = "SELECT Count(Stars) AS Hits FROM Rating WHERE MID=$midvar";
									$result2 = $conn->query($query2);
									$data = $result2->fetch_assoc();?>
									<div class="Hits"><?php echo "Based on ".$data['Hits']." Ratings";
									?></div>
									<a href="ViewMovie.php?id=<?php echo $midvar;?>">View all Comments</a>
								</td>
								<td>
									<div class="stars">
									  <form action="Average.php?page=Action"  method="post">
											<input class="star star-5" id="star-15" type="radio" name="star1" value="5" />
											<label class="star star-5" for="star-15"></label>
											<input class="star star-4" id="star-14" type="radio" name="star1" value="4" />
											<label class="star star-4" for="star-14"></label>
											<input class="star star-3" id="star-13" type="radio" name="star1" value="3" />
											<label class="star star-3" for="star-13"></label>
											<input class="star star-2" id="star-12" type="radio" name="star1" value="2" />
											<label class="star star-2" for="star-12"></label>
											<input class="star star-1" id="star-11" type="radio" name="star1" value="1" />
											<label class="star star-1" for="star-11"></label>
											<input type="text" name="Comment" class="form-control text-line" placeholder="Comment" />

									<?php   if($_SESSION['LOGGED_IN']==1)
											{
									?>	
												<input type="submit" class="btn btn-primary" name="submit" onclick="myFunction(jsvar)" value="Rate">
									<?php	}?>
									</form>
									<?php
											if($_SESSION['LOGGED_IN']!=1)
											{ 
									?>			<button class="btn btn-primary" id="myBtn"  onclick="LoginAlert()">Rate</button>
									<?php	}  /*data-toggle="tooltip" title="Please Login to Rate"*/ ?>
											
									  
									</div>
								</td>
								<td>
									<?php  
										if($_SESSION['LOGGED_IN']==1)
										{
											$uidvar = $_SESSION['UID'];
											$query1 = "SELECT * from Rating where MID=$midvar AND UID=$uidvar";
											$result1 = $conn->query($query1);
											$row1 = $result1->fetch_assoc();
										?>	
											<p><?php echo "Stars: ".$row1['Stars']; ?></p>
											<p><?php echo "Comment: ".$row1['Comment']; ?></p>
								<?php	}
										else
										{ ?>
											<p><?php echo "Stars: -"; ?></p>
											<p><?php echo "Comment: -"; ?></p>

								<?php	} ?>
								</td>
							</tr>
							<tr>
								<?php $midvar = $row[1]['Mid'];?>
								<td><img src="img/<?php echo $row[1]['Image']; ?>" alt="Image" ></td>
								<td>
									 <a href="ViewMovie.php?id=<?php echo $midvar;?>"><h4><?php echo "<b>".$row[1]['Title']."<br>"; ?></h4></a>
									 <?php echo "Genre:".$row[1]['Genre']."<br>"; ?>
									 <?php echo "Duration:".$row[1]['Duration']."<br>"; ?> 
									 <?php echo "Release_date:".$row[1]['ReleaseDate']."<br>"; ?>
									 <script type="text/javascript"> jsvar1 = 1;</script>
								</td>
								<td>
									<h4><?php echo "Rating: <b>".$row[1]['Rating']."</b>";?></h4>
									<?php 
									$query2 = "SELECT Count(Stars) AS Hits FROM Rating WHERE MID=$midvar";
									$result2 = $conn->query($query2);
									$data = $result2->fetch_assoc();?>
									<div class="Hits"><?php echo "Based on ".$data['Hits']." Ratings";
									?></div>
									<a href="ViewMovie.php?id=<?php echo $midvar;?>">View all Comments</a></td>
								<td>
									<div class="stars">
									  <form action="Average.php?page=Action"  method="post">
											<input class="star star-5" id="star-25" type="radio" name="star2" value="5" />
											<label class="star star-5" for="star-25"></label>
											<input class="star star-4" id="star-24" type="radio" name="star2" value="4" />
											<label class="star star-4" for="star-24"></label>
											<input class="star star-3" id="star-23" type="radio" name="star2" value="3" />
											<label class="star star-3" for="star-23"></label>
											<input class="star star-2" id="star-22" type="radio" name="star2" value="2" />
											<label class="star star-2" for="star-22"></label>
											<input class="star star-1" id="star-21" type="radio" name="star2" value="1" />
											<label class="star star-1" for="star-21"></label>
											<input type="text" name="Comment" class="form-control text-line" placeholder="Comment">
											<input type="submit" class="button" name="submit" onclick="myFunction(jsvar1)" value="Rate">
									  </form>
									</div>
								</td>
								<td>
									<?php  
										if($_SESSION['LOGGED_IN']==1)
										{
											$uidvar = $_SESSION['UID'];
											$query1 = "SELECT * from Rating where MID=$midvar AND UID=$uidvar";
											$result1 = $conn->query($query1);
											$row1 = $result1->fetch_assoc();
										?>	
											<p><?php echo "Stars: ".$row1['Stars']; ?></p>
											<p><?php echo "Comment: ".$row1['Comment']; ?></p>
								<?php	}
										else
										{ ?>
											<p><?php echo "Stars: -"; ?></p>
											<p><?php echo "Comment: -"; ?></p>

								<?php		} ?>
								</td>
							</tr>
							<tr>
								<?php $midvar = $row[2]['Mid'];?>
								<td><img src="img/<?php echo $row[2]['Image']; ?>" alt="Image" ></td>
								<td>
									 <a href="ViewMovie.php?id=<?php echo $midvar;?>"><h4><?php echo "<b>".$row[2]['Title']."<br>"; ?></h4></a>
									 <?php echo "Genre:".$row[2]['Genre']."<br>"; ?>
									 <?php echo "Duration:".$row[2]['Duration']."<br>"; ?> 
									 <?php echo "Release_date:".$row[2]['ReleaseDate']."<br>"; ?>
									 <script type="text/javascript"> jsvar2 = 2;</script>
								</td>
								<td>
									<h4><?php echo "Rating: <b>".$row[2]['Rating']."</b>";?></h4>
									<?php 
									$query2 = "SELECT Count(Stars) AS Hits FROM Rating WHERE MID=$midvar";
									$result2 = $conn->query($query2);
									$data = $result2->fetch_assoc();?>
									<div class="Hits"><?php echo "Based on ".$data['Hits']." Ratings";
									?></div>
									<a href="ViewMovie.php?id=<?php echo $midvar;?>">View all Comments</a></td>
								<td>
									<div class="stars">
									  <form action="Average.php?page=Action"  method="post">
											<input class="star star-5" id="star-35" type="radio" name="star3" value="5" />
											<label class="star star-5" for="star-35"></label>
											<input class="star star-4" id="star-34" type="radio" name="star3" value="4" />
											<label class="star star-4" for="star-34"></label>
											<input class="star star-3" id="star-33" type="radio" name="star3" value="3" />
											<label class="star star-3" for="star-33"></label>
											<input class="star star-2" id="star-32" type="radio" name="star3" value="2" />
											<label class="star star-2" for="star-32"></label>
											<input class="star star-1" id="star-31" type="radio" name="star3" value="1" />
											<label class="star star-1" for="star-31"></label>
											<input type="text" name="Comment" class="form-control text-line" placeholder="Comment">
											<input type="submit" class="button" name="submit" onclick="myFunction(jsvar2)" value="Rate">
									  </form>
									</div>
								</td>
								<td>
									<?php  
										if($_SESSION['LOGGED_IN']==1)
										{
											$uidvar = $_SESSION['UID'];
											$query1 = "SELECT * from Rating where MID=$midvar AND UID=$uidvar";
											$result1 = $conn->query($query1);
											$row1 = $result1->fetch_assoc();
										?>	
											<p><?php echo "Stars: ".$row1['Stars']; ?></p>
											<p><?php echo "Comment: ".$row1['Comment']; ?></p>
								<?php	}
										else
										{ ?>
											<p><?php echo "Stars: -"; ?></p>
											<p><?php echo "Comment: -"; ?></p>

								<?php		} ?>
								</td>
							</tr>
							<tr>
								<?php $midvar = $row[3]['Mid'];?>
								<td><img src="img/<?php echo $row[3]['Image']; ?>" alt="Image" ></td>
								<td>
									 <a href="ViewMovie.php?id=<?php echo $midvar;?>"><h4><?php echo "<b>".$row[3]['Title']."<br>"; ?></h4></a>
									 <?php echo "Genre:".$row[3]['Genre']."<br>"; ?>
									 <?php echo "Duration:".$row[3]['Duration']."<br>"; ?> 
									 <?php echo "Release_date:".$row[3]['ReleaseDate']."<br>"; ?>
									 <script type="text/javascript"> jsvar3 = 3;</script>
								</td>
								<td>
									<h4><?php echo "Rating: <b>".$row[3]['Rating']."</b>";?></h4>
									<?php 
									$query2 = "SELECT Count(Stars) AS Hits FROM Rating WHERE MID=$midvar";
									$result2 = $conn->query($query2);
									$data = $result2->fetch_assoc();?>
									<div class="Hits"><?php echo "Based on ".$data['Hits']." Ratings";
									?></div>
									<a href="ViewMovie.php?id=<?php echo $midvar;?>">View all Comments</a>
								</td>
								<td>
									<div class="stars">
									  <form action="Average.php?page=Action"  method="post">
											<input class="star star-5" id="star-45" type="radio" name="star4" value="5" />
											<label class="star star-5" for="star-45"></label>
											<input class="star star-4" id="star-44" type="radio" name="star4" value="4" />
											<label class="star star-4" for="star-44"></label>
											<input class="star star-3" id="star-43" type="radio" name="star4" value="3" />
											<label class="star star-3" for="star-43"></label>
											<input class="star star-2" id="star-42" type="radio" name="star4" value="2" />
											<label class="star star-2" for="star-42"></label>
											<input class="star star-1" id="star-41" type="radio" name="star4" value="1" />
											<label class="star star-1" for="star-41"></label>
											<input type="text" name="Comment" class="form-control text-line" placeholder="Comment">
											<input type="submit" class="button" name="submit" onclick="myFunction(jsvar3)" value="Rate">
									  </form>
									</div>
								</td>
								<td>
									<?php  
										if($_SESSION['LOGGED_IN']==1)
										{
											$uidvar = $_SESSION['UID'];
											$query1 = "SELECT * from Rating where MID=$midvar AND UID=$uidvar";
											$result1 = $conn->query($query1);
											$row1 = $result1->fetch_assoc();
										?>	
											<p><?php echo "Stars: ".$row1['Stars']; ?></p>
											<p><?php echo "Comment: ".$row1['Comment']; ?></p>
								<?php	}
										else
										{ ?>
											<p><?php echo "Stars: -"; ?></p>
											<p><?php echo "Comment: -"; ?></p>

								<?php		} ?>
								</td>
							</tr>
						</tbody>						
                    </table>
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

							<h3><?php echo $res['CompanyName']."<br>".$res['AdText'] ?></h3>

				<?php	}
						?>
                		</tbody>
                	</table>
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
