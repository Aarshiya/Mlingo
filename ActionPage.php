
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			 <link rel="stylesheet" href="css/style.css" />
        <style>
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
				background-color: #111;
			}
		form
		{
		    border: 3px solid #f1f1f1 ;
			padding-top: 30px ;
			padding-right:50px ;
			padding-bottom: 20px ;
			padding-left: 50px ;
			background-color: white ;
			margin:60px ;
		
		}
		body
		{
		    	
		    	background-image: url("canva.jpg") ;
			font-family: "Raleway", sans-serif;
		}

        .background
        {
            position: sticky;
            z-index: 1000;
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

      
      </style>
    </head>
    <body>
        
    
        <div class="container-fluid background">
		     
          
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked" role="tablist">
                  <li class="active"><a href="Admin.html">Home</a></li>
                  <li><a href="DisplayMovies.php">MOVIES</a></li>
                  <li><a href="DisplayRatings.php">ALL RATINGS</a></li>
                  <li><a href="DisplayUsers.php">USERS</a></li>
                  <li><a href="DisplayAdvertisers.php">ADVERTISERS</a></li>
                  <li><a href="InsertMovie.html">INSERT MOVIE</a></li>
				  <li><a href="InsertNews.html">INSERT NEWS</a></li>
                  <li><a href="LogOut.php">LOG OUT</a></li>
                </ul>
            </div>
			
                <div class="col-md-7">
                    <form action="ActionPage.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <h1 align="center">Enter movies </h1>
                        <div class="form-group ">
                            <label class="control-label">Title:</label>
                            <input name="Title" type="text" class="form-control" placeholder="Enter title"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label">Language:</label>
                            <input name="Language" type="text" class="form-control" placeholder="Enter language"/>
                        </div>
						<div class="form-group">
                            <label class="control-label">Genre:</label>
                            <input name="Genre" type="text" class="form-control text-line"  placeholder="Genre-Genre"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Duration:</label>
                            <input name="Duration" type="text" class="form-control text-line" placeholder="HH:MM:SS"/>
                        </div>
						<div class="form-group">
                            <label class="control-label">ReleaseDate:</label>
                            <input name="ReleaseDate" type="text" class="form-control text-line" placeholder="YYYY-MM-DD"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label">Rating:</label>
                            <input name="Rating" type="text" class="form-control" placeholder="Enter Rating"/>
                        </div>
			            <div class="form-group ">
                            <label class="control-label">Image:</label>                                
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        
                        <input type="submit" class="button" name="submit" value="submit ">
                    </form>
                </div>
            <div class="col-md-2"></div>
        </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
