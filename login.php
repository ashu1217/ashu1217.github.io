<?php 
	include "includes/common.php";
	if(isset($_SESSION['email']))
		{ 
		 header('location:animal.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Animal Rescue</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/animalstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="lognav">
		<img src="images/animalrescue.png" class="logo" alt="Logo">
		
		<nav>
			<a href="">Home</a>
			<a href="">Search</a>
			<a href="">Medical</a>
			<a href="">Adopt</a>
			<a href="">Add Animal</a>
			<a href="">NGO Service</a>
			<a href="">Report Abuse</a>
			<a href="">Volunteer</a>
			<a href="">About Us</a>
			<button class="logbtn btn"><a id="logbt" href="login.html">Login</a></button>
					 
		</nav>
		<div class="loginarea">
    	<div class="panel panel-primary">
   	 				<div class="panel-heading">
   	 					<h2>LOGIN</h2>
   	 				</div>
   	 				<div class="panel-body">
   	 					<form method="post" action="login_submit.php">
   	 						<div class="form-group">
   	 							<input type="email" name="email" class="form-control" placeholder="Email">
   	 						</div>
   	 						<div class="form-group">
   	 							<input type="password" name="password" class="form-control" placeholder="Password">
   	 						</div>
   	 						<button class="btn btn-primary">Login</button>

   	 				    </form>
   	 				</div>
   	 				<div class="panel-footer">
   	 					<p>Don't have an accunt? <a href="signup.html">Register</a> </p>
   	 				</div>
   	    </div>

    </div>
    </div>

    
 </body>
</html>    		