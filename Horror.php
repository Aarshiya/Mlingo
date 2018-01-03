<?php 
  include("conn.php");
  
	$tbl_name="Movies";
	session_start();
	$query = "SELECT * FROM $tbl_name where Genre like '%Horror%' ";

	

?>
<!DOCTYPE html>
<html>
  <head>
		<title>Movies</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		 <script type="text/javascript">
			function myFunction(test) 
			{
				alert(test);
				<?php $_SESSION['MID'] = test; ?>
			}
		</script> 

		<style>
			img
			{
				float: center;
				height: 200px;
				width: auto;
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
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
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
		</style>
		
	</head>
	<body>
		<ul>
			<li><a href="Home.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
			<li><a href="Action.php">ACTION</a></li>
			<li><a href="romantic.html">ROMANTIC</a></li>
			<li><a href="comedy.html">COMEDY</a></li>
			<li><a href="horror.html">HORROR</a></li>
<?php 
			if($_SESSION['LOGGED_IN']==1)
			{
?>
				<li><a href="LogOut.php">Log Out</a></li>
				<li><a href="try1.html"><span class="glyphicon glyphicon-user"></span>Hey <?php echo $_SESSION['NAME']; ?></a></li>
<?php	
			}
			else
			{
?>
				<li><a href="LogIn.html">Login</a></li>
				<li><a href="try1.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<?php 
			}	
?>	 
		</ul>
    	<div class="container-fluid">
		  <div class="row">
		    <div class="col-md-1">
					
				</div>
		    <div class="col-md-10">
				<form>
					<span class="glyphicon glyphicon-search"></span> <input type="text" action="search.php"  value="Title" name="search" placeholder="Search..">
				</form>
		     	<table class="table table-bordered table-striped table-hover">
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
							<th>MRS Rating</th>					
							<th>Your Rating</th>
						</tr>					
					</thead>
<?php 			
						$result = $conn->query($query);
?>
					<tbody>
					<?php
						$row = array();
						while ( $res = $result->fetch_assoc()) {
							$row[] = $res;
						}
						$i = 0;
					?>
					<script>
						jsvar = <?php echo $i ;?>;
					</script>				
						<tr>
							<!--<td><?php echo '<img src="data:image/jpeg;base64,' .base64_encode($row['Image']).'"/ hspace="30" vspace="30" >'; ?></td>-->
							<td>
								<?php $i=0; echo "<b>"."MID:".$row[0]['Mid']."<br>"; ?>
								 <?php echo "<b>"."Title:".$row[0]['Title']."<br>"; ?>
								 <?php echo "Genre:".$row[0]['Genre']."<br>"; ?>
								 <?php echo "Duration:".$row[0]['Duration']."<br>"; ?> 
								 <?php echo "Release_date:".$row[0]['ReleaseDate']."<br>"; ?>
							</td>
							<td><?php echo "Rating:".$row[0]['Rating']."</b>"."<br>"; ?></td>
							<td>
								<div class="stars">
									<form action="Rate.php"  method="post">
										<input class="star star-5" id="star-15" type="radio" name="star15" value="5" />
										<label class="star star-5" for="star-15"></label>
										<input class="star star-4" id="star-14" type="radio" name="star14" value="4" />
										<label class="star star-4" for="star-14"></label>
										<input class="star star-3" id="star-13" type="radio" name="star13" value="3" />
										<label class="star star-3" for="star-13"></label>
										<input class="star star-2" id="star-12" type="radio" name="star12" value="2" />
										<label class="star star-2" for="star-12"></label>
										<input class="star star-1" id="star-11" type="radio" name="star11" value="1" />
										<label class="star star-1" for="star-11"></label>
										<input onclick="myFunction(jsvar);" type="submit" class="button" name="submit" value="Rate">
										<!-- <button onclick="myFunction()" name="submit">Rate</button>  -->
									</form>
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<?php $i=1; echo "<b>"."MID:".$row[1]['Mid']."<br>"; ?>
								 <?php echo "<b>"."Title:".$row[1]['Title']."<br>"; ?>
								 <?php echo "Genre:".$row[1]['Genre']."<br>"; ?>
								 <?php echo "Duration:".$row[1]['Duration']."<br>"; ?> 
								 <?php echo "Release_date:".$row[1]['ReleaseDate']."<br>"; ?>
							</td>
							<td><?php echo "Rating:".$row[1]['Rating']."</b>"."<br>"; ?></td>
							<td>
								<div class="stars">
									<form action="Rate.php"  method="post">
										<input class="star star-5" id="star-25" type="radio" name="star25" value="5" />
										<label class="star star-5" for="star-25"></label>
										<input class="star star-4" id="star-24" type="radio" name="star24" value="4" />
										<label class="star star-4" for="star-24"></label>
										<input class="star star-3" id="star-23" type="radio" name="star23" value="3" />
										<label class="star star-3" for="star-23"></label>
										<input class="star star-2" id="star-22" type="radio" name="star22" value="2" />
										<label class="star star-2" for="star-22"></label>
										<input class="star star-1" id="star-21" type="radio" name="star21" value="1" />
										<label class="star star-1" for="star-21"></label>
										<button onclick="document.write();" name="submit">Rate</button> 
									</form>
								</div>
							</td>
						</tr>
					</tbody>
		      </table>
		    </div>
		    <div class="col-md-1"></div>
		  </div>
    </div>
<!--
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Launch demo modal
	</button>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
		...
	      </div>
	      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
-->
	
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

