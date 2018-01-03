<?php 
    include("conn.php");
	session_start();
	$tbl_name="Comm_Ad";
	$Company = $_SESSION['Company'];
	
	$query = "SELECT * FROM $tbl_name where CompanyName = '" . $Company . "'";
	$query1 = "SELECT * FROM Comm_Ad3 where AID = (SELECT AID FROM Comm_Ad where CompanyName = '" . $Company . "')";

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Advertise Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      </style>
    </head>
    <body>

	<ul>
	  <li><a class="active" href="Home.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
	  <li><a href="Action.php">ACTION</a></li>
	  <li><a href="romantic.html">ROMANTIC</a></li>
	  <li><a href="comedy.html">COMEDY</a></li>
	   <li><a href="horror.html">HORROR</a></li>
	</ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  
                    <form action="AdText.php" method="post" class="form-horizontal" enctype="multipart/form-data">
					    <?php $result = $conn->query($query);
			            $row = $result->fetch_assoc();
			            $result1 = $conn->query($query1);
			            $row1 = $result1->fetch_assoc();?>

					     <h3> Your Advertisement Details:</h3>
					     <p>
					     	<?php echo "<b>"."Company Name:".$row['CompanyName']."<br>"; ?>
							 <?php echo "Duration:".$row['Duration']."<br>"; ?>
							 <?php echo "Advertisement Type:".$row['Ad_Type']."<br>"; ?>


							<?php if($row['Ad_Type'] == "Text" )
							{ ?>
								<div class="form-group">
		                            <label>Enter the text to be displayed in your Advertisement:</label>
		                            <textarea name="Adtext" class="form-control" rows="6" id="description"></textarea>
	                        	</div>
	                        	<input type="submit" class="btn btn-default" name="submit" value="Submit">
					        <?php   }?>
					       <?php if($row['Ad_Type'] == "Image" )
							{ ?>
								<div class="form-group ">
	                                <label class="control-label">Image:</label>                                
	                                <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
	                        	<input type="submit" class="btn btn-default" name="submit" value="Submit">
					<?php   }?>
							 <?php echo "Amount to be Paid:".$row1['Amount']."<br>"; ?>
					     </p>

                    </form>
  					

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
       
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
