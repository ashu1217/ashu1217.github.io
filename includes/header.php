<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/animalstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="main-header">
		<a href="animal.php"><img src="images/animalrescue.png" class="logo" alt="Logo"></a>
		
		<nav>
			<a href="animal.php">Home</a>
			<a href="searches.php">Search</a>
			<a href="medical.php">Medical</a>
			<a href="adopt.php">Adopt</a>
			<a href="addanimal.php">Add Animal</a>
			<a href="ngo.php">NGO Service</a>
			<a href="reportabuse.php">Report Abuse</a>
			<a href="volunteers.php">Volunteer</a>
			<a href="aboutus.php">About Us</a>
			<?php
			 if(!isset($_SESSION['email']))
			 { ?>
			   <button class="logbtn btn"><a id="logbt" href="login.php">Login</a></button>
		     <?php }
		      else {?>
		      	<a href="logout.php"><h6 id="ndisp"><?php echo($_SESSION['name']); ?></h6></a>
		      <?php 
		       } ?>

		</nav>
    </div>		

</body>
</html>