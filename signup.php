<?php
	include "includes/common.php";
	 if(isset($_SESSION['email']));
	  // header('location:animal.php');
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
		<?php
		  include  "includes/header.php";
		?>	 
		<div class="container">
   	 	<div class="signuparea">
   	 		<div class="row_style">
   	 			<h1>SIGN UP</h1>
   	 			<div class="col-xs-4">
   	 				<form method="post" action="signup_script.php">
   	 					<div class="form-group">
   	 						<input class="form-control" type="text" name="name" placeholder="Name" required>
   	 					</div>
   	 					
   	 					<div class="form-group">
   	 						<input class="form-control" type="email" name="email" placeholder="Email"  required=>
   	 					</div>
   	 				
   	 					<div class="form-group">
   	 						<input class="form-control" type="password" name="password" placeholder="Password"
                           pattern="[a-zA-Z0-9]+" required 
                        >
   	 					</div>
   	 					<div class="form-group">
   	 						<input class="form-control" type="number" name="phone" placeholder="Contact"
                        required pattern="[1-9])+(?:-?\d){10}">
   	 					</div>
   	 					<div class="form-group">
   	 						<input class="form-control" type="text" name="address" placeholder="Address" required=>
   	 					</div>

   	 					<button class="btn btn-primary">Submit</button>
   	 					
   	 					
   	 				</form>
   	 			</div>
   	 		</div>
   	 	</div>
   	 </div>

</body>
</html>
