<?php
    include('conn.php');
    session_start();
    $id = $_GET['id'];

    $query = "SELECT * FROM Movies where Mid = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            height: 100%;
            position: fixed;           
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
      </style>
    </head>
    <body>    
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="Update.php?id=<?php echo $id;?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <h1 align="center">Edit Movie</h1>
                    <div class="form-group ">
                        <label class="control-label">MID:</label>
                        <input name="Mid" type="text" class="form-control" value="<?php echo $row['Mid']; ?>" />
                    </div>
                    <div class="form-group ">
                        <label class="control-label">Title:</label>
                        <input name="Title" type="text" class="form-control" value="<?php echo $row['Title']; ?>" />
                    </div>
                    <div class="form-group ">
                        <label class="control-label">Language:</label>
                        <input name="Language" type="text" class="form-control" value="<?php echo $row['Language']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Genre:</label>
                        <input name="Genre" type="text" class="form-control text-line"  value="<?php echo $row['Genre']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Duration:</label>
                        <input name="Duration" type="text" class="form-control text-line" value="<?php echo $row['Duration']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">ReleaseDate:</label>
                        <input name="ReleaseDate" type="text" class="form-control text-line" value="<?php echo $row['ReleaseDate']; ?>"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label">Rating:</label>
                        <input name="Rating" type="text" class="form-control" value="<?php echo $row['Rating']; ?>"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label">Image:</label>                                
                        <input type="file" name="fileToUpload" id="fileToUpload"><?php echo "<br>Current File: ".$row['Image'] ; ?>
                    </div>
                    
                    
                    <input type="submit" class="button" name="submit" value="Update">
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
       
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
