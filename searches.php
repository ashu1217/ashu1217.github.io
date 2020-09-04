<?php
	include "includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Animal Rescue</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/animalstyle.css">
	<link rel="stylesheet" type="text/css" href="css/searchstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="search1">	
		<?php
		  include "includes/header.php";
		?>  
		<div class="search2">	
		<h1>Find a Pet</h1>
		<br>
		<form>
        <div class="inner-form">
            <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="What are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="">CATEGORY</option>
                <option>Dog</option>
                <option>Cat</option>
                <option>Parrot</option>
                <option>All</option>  
              </select>
            </div>
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
	</div>	
</div>

</body>
</html>
