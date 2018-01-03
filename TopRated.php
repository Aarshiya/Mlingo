<?php 
    include("conn.php");
	$tbl_name="Movies";
	session_start();
	$query = "SELECT Title, Image, Rating FROM Movies  ORDER BY Rating DESC LIMIT 5 ";
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
    	<style>
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
		 body
		 {
				background-color: black ;
				font-family: "Raleway", sans-serif;
				background-attachment: fixed;
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
     
		</style>
		</head>
		<body>
			<header>
				<h1 align="center">TOP 4 RATED MOVIES</h1>
			</header>
        	<div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <table class=" table-responsive ">
										
						<?php 
							$result = $conn->query($query);
							$row1 = array();
							while ( $res = $result->fetch_assoc()) 
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
					</tr>		 
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>

        
        	
        

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
