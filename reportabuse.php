<?php
	include "includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Animal Rescue</title>
		<link rel="stylesheet" type="text/css" href="css/animalstyle.css">
	</head>
	</head>
    <body>
	  <div class="report-outer">	
		<?php
		  include "includes/header.php";
		?>  
		<br>
		<br><br><br><br><br><br>
		<div class="report-inner">
			<h1>File a Report</h1>
			<form class="col-lg-9">
						  <div class="form-group">
						    <label for="first-name">Name</label>
						    <input type="text" class="form-control" placeholder="Name">
						  </div>
						  <div class="form-group">
						    <label for="last-name">Animal</label>
						    <input type="text" class="form-control" placeholder="Last Name">
						  </div>						  
						  <div class="form-group">
						    <label for="Address">Address</label>
						    <input type="text" class="form-control mb-20" placeholder="Your Address">
						    <input type="text" class="form-control" placeholder="">
						  </div>						  
						  <div class="form-row">
						  	<div class="col-6 mb-30">
						  		<label for="City">City</label>
						   		<div class="select-option" id="service-select"">
									<select>
										<option data-display="Select City">Select City</option>
										<option value="1">Jabalpur</option>
										
									</select>
								</div>	
						  	</div>
						  	<div class="col-6 mb-30">

						  	<div class="col-6 mb-30">
						  		<label for="area">Area</label>
						   		<div class="select-option" id="service-select"">
									<select>
										<option data-display="Select-Area">Select Area</option>
										<option value="1">Vijay Nagar</option>
										<option value="2">Garha</option>
										<option value="3">Medical</option>
										<option value="4">Civil Lines</option>
										<option value="5">Hanuman Tal</option>
									</select>
								</div>	
						  	</div>
						  	<div class="col-6 mb-30">
						  		<label for="postal-code">Postal code</label>
						   		<input type="number" class="form-control" placeholder="Postal Code">						  		
						  	</div>						  	
						  	<div class="col-6 mb-30">
						  		<label for="email">Email</label>
						   		<input type="email" class="form-control" placeholder="Email">
						  	</div>
						  	<div class="col-6 mb-30">
						  		<label for="phone">Phone</label>
						   		<input type="phone" class="form-control" placeholder="Phone Number">						  		
						  	</div>
						  </div>	
						  <div class="form-group">
		   	 					<label>Attach Photo/Video:</label>
		   	 					<input class="form-control" type="file" accept="image/*,video/*" name="image/video" required>
		   	 			 </div>	

						  
						  <div class="form-group">
						    <label for="note">Report</label>
						    <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Write message"></textarea>
						  </div>						  
						  <button type="submit" class="btn primary-btn float-right">File Report</button>
						</form>
					
					</div>
	 			</div>
		</body>
</html>		