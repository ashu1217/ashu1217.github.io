<?php
    include "includes/common.php";
    //session_unset();
	if(isset($_SESSION['email']))
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
	<header>
		<?php
		  include "includes/header.php";
		?>  
		<div  class="Headers">
    		<h1>Adopt Us.<br>We need your Help.</h1>
    		<a href="#" class=" text-uppercase">Find a pet to adopt</a>
        </div>
      
	
	</header>
	<div class="midarea1">
		<div class="containersss">
		   <div class="carea1">
		   	  <h1><b>Please select your favourite pet.</b></h1>
		   	  <button class="btn logbtn"><a href="#">Fill Adoption Form</a></button>	   	
		   </div>
		</div>
	</div>

	<div class="midarea2">
		<div class="half1">
			<img src="images/half1.jpg" alt="just a pic">
		</div>
		<div class="half2">
			<h1><b>FOR FIRST TIME IN JABALPUR</b></h1>
		
			<h3>Adopt pets .Help Animals . Report Animal Abuse</h3>
			<br>
			<p><i>“A dog is the only thing on earth that loves you more than you love yourself.”</i> </p>
			<button class="btn logbtn"><a href="#">GET DETAILS</a></button>
		</div>
	</div>

	<div class="midarea3">
		<iframe width="600" height="300" src="https://www.youtube.com/embed/07d2dXHYb94" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br><br>
		<h4><b>Watch this video to see how they live.</b></h4>
	</div>

	<section class="midarea4">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Process to adopt a pet</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-thumbs-up"></span>
								<a href="#">
									<h4>
										Pet Selection
									</h4>
								</a>
								<p>
                                    Select pets at your will with immence pleasure.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-user"></span>
								<a href="#">
									<h4>
										Meeting Authority
									</h4>
								</a>
								<p>
									Once you chose a pet.A meet-up with concerned authority
                                    and take a look at your choice.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-license"></span>
								<a href="#">
									<h4>
										Adoption Form Filling
									</h4>
								</a>
								<p>
								     After meeting both the authority and the animal.Fill out an application
                                    form available from the account page.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-magic-wand"></span>
								<a href="#">
									<h4>
										Bring to new family
									</h4>
								</a>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
		</section>
	


	<div class="midarea5">
		<h1>Want to help? Become a Volunteer<h1>
			<br>
			<button class="btn"><a href="login.php">View PDF Details</a></button>
			<button class="btn"><a href="Volunteers.php">Register now</a></button>
	</div>


	<div class="footers">
		<div class="f1">
			<h6>About Us</h6>
			<br>
			<p>As we coexist with animals we should care to them .Help them in providing shelter to some needy life.We as a team try to provide with various aspects of helping the animals with medical care,finding their new home and various others which will surely become not only beneficial to animals but to humans too. </p>

		</div>
		<div class="f2">
			<h6>Useful Links</h6>
								<div class="row">
									<ul class="col footer-nav">
										<li><a href="#">Home</a></li>
										<li><a href="#">Service</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">Case Study</a></li>
									</ul>
									<ul class="col footer-nav">
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Team</a></li>
										<li><a href="#">Blog</a></li>
									</ul>									
								</div>

		</div>
		
		<div class="f3">
			<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contact Us</h6>
								<ul class="list-contact">
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-home"></span>
										</div>
										<div class="detail">
											<h4>Jabalpur, India</h4>
											<p>
												Gyan Ganga Institute of Technology and Sciences
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-phone-handset"></span>
										</div>
										<div class="detail">
											<h4>0123456789</h4>
											<p>
												Mon to Fri 9:40am to 4:30 pm
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-envelope"></span>
										</div>
										<div class="detail">
											<h4>support@teamanimalhelp.com</h4>
											<p>
												Send us your query anytime!
											</p>
										</div>	
									</li>																		
								</ul>
							</div>

		</div>
			
	</div>
		



    
</body>
</html>