<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Oswald">
    
    
  <title>Shelter Login</title>
  <meta name="description" content="">
  
  <meta charset="utf-8">
  <?php include("header-html.php") ?>
  </head>
<body>
 <div class="container">

     
	   <div class="row">
		 <div class="col-md-12">
             <div style="font-family: 'Oswald', serif;">
		 <form role="form">
		 <h1><center>Welcome to BunkBed!</center></h1>
             <br>
         <center><img src="bunkbed.jpg"/></center>
        <h2><center>Putting homelessness to bed, one connection at a time.</center></h2>
		  <div class="form-group">
			 <label>Username</label>
			 <input type="text" class="form-control" name="frmUserName" placeholder="Username">
		   </div>
		    <div class="form-group">
			   <label>Password</label>
			   <input type="text" class="form-control" name="frmUserName" placeholder="Password">
			 </div>
			 <p><a class="btn btn-primary" href="list-clients.php">Login</a>
			 <a class="btn btn-success" href="shelter-new.php">Create Account</a>
             <a class="btn btn-danger" href="login.php">Switch Users</a>
			</p>
			 <p>Forgot your password? <a href="reset-password.php">Click here</a>
			</p>
			 	 </form>
				 </div>
		 </div>
	   </div>
	   
    </div> <!-- /container -->


</body>
</html>