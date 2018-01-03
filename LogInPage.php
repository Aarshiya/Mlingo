<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

      <script type="text/javascript">
        window.onload myfunc()
        {

        }
      </script>
        
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
			background-color: white;
      text-decoration: none;
      color: blue;
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
    form 
    {
      border: 3px solid #f1f1f1;
      padding-top: 20px;
      padding-right: 30px;
      padding-bottom: 20px;
      padding-left: 30px;
      background-color: white;
      margin:30px;
      border-radius:12px;
    }
    body
    {
      background-image: url(../loginback.jpg);
      font-family: "Raleway", sans-serif;
    }

    input[type=submit]
    {
      float: right;
    }
	  .Welcome
    {
      float: center;
      color: white;
    }  
      
      </style>
    </head>

    <body>      
      <?php 
        if(isset($Message1))
        {

        }
      ?>

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
          <li style="margin-left:7cm;"><a href="LogOut.php">Log Out</a></li>
          <li><a href="User.php"><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['NAME'];?></a></li>

<?php 
        }
        else
        {
?>
          
          <li><a href="try1.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<?php                
        } 
?>              
        </div>
  
      </ul>
    </div>
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="my-container">
          <p align="center" ><img src="../img/Mlingo.png"></p>
          <h3 align="center" style="color: white">Welcome! Please Login</h3>
          <form action="LogIn.php" method="post" class="form-horizontal">
            <p id="demo"></p>

            <h2 align="center"><b>LOG IN</b></h2>
            <p class="box">
              <div class="form-group">
                  <label class="control-label">Email:</label>
                  <input name="Email" type="email" class="form-control text-line"  placeholder="Email Adress"/>
              </div>
              <div class="form-group">
                  <label class="control-label">Password:</label>
                  <input name="PWD" type="password"  class="form-control text-line" placeholder="Password"/>
              </div>

              <a href="try1.html" class="btn btn-link"><h4>Sign Up</h4></a>
             
             <form name="form" method="post" action="LogIn.html">
              <input type="submit"  class="btn btn-danger btn-lg"  name="submit" value="Log In" >
              
              </form>
              </p>
          </form>
        </div>
        
      </div>
       
      <div class="col-md-3"></div>
    
    
        
    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
