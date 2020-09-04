<?php
	include "includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Animal Rescue</title>
		<link rel="stylesheet" type="text/css" href="css/addanimalstyle.css">
	</head>
	</head>
    <body>
	  <div class="addanimal-outer">	
		<?php
		  include "includes/header.php";
		?>  
		<div class="panel panel-primary"> 
		   <h1>ADD ANIMAL</h1>
		   <br>
		   <hr>
		   <form>
		   	 <div class="form-group">
		   	 	<label>Caretaker Name:</label>
		   	 	<input class="form-control" type="text" name="Caretaker" required>
		   	 </div>

		   	 <div class="form-group">
		   	 	<label>Location:</label>
		   	 	<input class="form-control" type="text" name="loaction" required>
		   	 </div>

		   	 <div class="form-group">
		   	 	<label>Animal Type:</label>
		   	 	<div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="">CATEGORY</option>
               		 <option>Dog</option>
               		 <option>Cat</option>
               		 <option>Parrot</option>
               		 <option>Other</option>  
              		</select>
            	</div>
           	 </div>


		   	 <div class="form-group">
		   	 	<label>Breed:</label>
		   	 	<div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                      
                     <option placeholder="">CATEGORY</option>
               		 <option>German Shephard</option>
               		 <option>German Spitz</option>
               		 <option>douberman</option>
               		 <option>Other</option>  
              		</select>
            	</div>
           	 </div>

           	 <div class="form-group">
		   	 	<label>Age Group:</label>
		   	 	<div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                      
                     <option placeholder="">CATEGORY</option>
               		 <option>Puppy</option>
               		 <option>Young</option>
               		 <option>Adult</option>
               		 <option>Old</option>  
               		 <option>Unknown</option>
              		</select>
            	</div>
           	 </div>
           	 

           	 <div class="form-group">
		   	 	<label>Gender:</label>
		   	 	 <input type="radio" id="male" name="gender" value="male">
  				<label for="male">Male</label><br>
  				<input type="radio" id="female" name="gender" value="female">
 				 <label for="female">Female</label><br>
  				<input type="radio" id="other" name="gender" value="other">
 				 <label for="other">Other</label>
		   	 </div>

		   	 <div class="form-group">
		   	 	<label>Price(if any):</label>
		   	 	<input class="form-control" type="number" name="price" required>
		   	 </div>
		   	 <div class="form-group">
		   	 	<label>Add a Photo:</label>
		   	 	<input class="form-control" type="file" accept="image/*" name="image" required>
		   	 </div>

		   	 <div class="form-group">
		   	 	<label>Description:</label>
		   	 	<textarea rows="4" cols="50" name="comment" form="usrform">Enter text here...</textarea>
		   	 </div>	
		   	 <button class="btn btn-primary">Submit</button>	


		   </form>

		</div>

	  </div>
    </body>
</html>
		