<?php 
include("conn.php");
session_start();
$query = 'select * from User';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin | User </title>
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
	  	<li><a href="DisplayMovies.php">ALL MOVIES</a></li>
	  	<li><a href="DisplayRatings.php">ALL RATINGS</a></li>
      	<li><a href="DisplayUsers.php">USERS</a></li>
      	<li><a href="DisplayAdvertisers.php">ADVERTISERS</a></li>
      	<li><a href="InsertMovie.html">ADD MOVIE</a></li>
     	<li><a href="InsertNews.html">ADD NEWS</a></li>
      	<li><a href="LogOut.php">LOG OUT</a></li>
	</ul>            

	<table class="table table-bordered table-responsive table-hover">
		
		<thead>
			<tr>
				<th>Uid</th>					
				<th>Fname</th>
				<th>Lname</th>					
				<th>Age</th>
				<th>Email</th>
				<th>Password</th>
				<th>Location</th>
				
			</tr>					
		</thead>
		
		<tbody>
		<?php 
			$result = $conn->query($query);
			while ( $row = $result->fetch_assoc()) 
			{ ?>
				<tr>
					<td><?php echo "<b>".$row['UID']."<br>"; ?></td>
					<td><?php echo "<b>".$row['FName']."<br>"; ?></td>
					<td><?php echo "<b>".$row['LName']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Age']."<br>"; ?></td>
					<td><?php echo "<b>".$row['Email']."<br>"; ?></td>	
					<td><?php echo "<b>".$row['PWD']."<br>"; ?></td>	               
					<td><?php echo "<b>".$row['Location']."<br>"; ?></td>
									
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
