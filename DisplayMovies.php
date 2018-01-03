<?php 
include("conn.php");
session_start();
$query = 'select * from Movies';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin | Movies</title>
        <link rel="shortcut icon" href="../img/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   	    <link rel="stylesheet" href="css/style.css" />

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
		  background-image: url("canva.jpg") ;
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
</style>
</head>
<body>
	<ul>
		<li><a href="Home.php">MLINGO</a></li>
	  	<li><a class="active nav nav-pills" role="tablist" href="Admin.html"> ADMIN</a></li>
	  	<li><a href="DisplayRatings.php">ALL RATINGS</a></li>
      	<li><a href="DisplayUsers.php">USERS</a></li>
      	<li><a href="DisplayAdvertisers.php">ADVERTISERS</a></li>
      	<li><a href="InsertMovie.html">ADD MOVIE</a></li>
     	<li><a href="InsertNews.html">ADD NEWS</a></li>
      	<li><a href="LogOut.php">LOG OUT</a></li>
	</ul>                  

	<table class="table table-bordered table-responsive table-hover">
		<colgroup>
			<col class="ChartPoster">
			<col class="ChartTitle">
			<col class="MRSRating">
			<col class="YourRating">
		</colgroup>
		<thead>

			<tr class="bold">
				<th>Mid</th>					
				<th>Title</th>
				<th>Language</th>					
				<th>Genre</th>
				<th>Duration</th>
				<th>ReleaseDate</th>
				<th>Rating</th>
				<th>Image</th>		
				<th>Edit</th>
				<th>Delete</th>
			</tr>					
		</thead>
		
		<tbody>
		<?php 
			$result = $conn->query($query);
			while ( $row = $result->fetch_assoc()) 
			{ ?>
				<tr>
					<td><?php echo "<b>".$row['Mid']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Title']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Language']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Genre']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Duration']."<br>"; ?></td>	
					<td><?php echo "<b>".$row['ReleaseDate']."<br>"; ?></td>	               
					<td><?php echo "<b>".$row['Rating']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Image']."<br>"; ?></td>
					<td><a href="EditMovie.php?id=<?php echo $row['Mid'];?>&table=Movies"><span class="glyphicon glyphicon-pencil"></span></a></td>
					<td><a href="DeleteMovie.php?id=<?php echo $row['Mid'];?>&table=Movies"><span class="glyphicon glyphicon-trash"></span></a></td>					
                 </tr>
	<?php	}						
		?>			
		</tbody>
		<!-- jQuery library -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <!-- Latest compiled JavaScript -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
