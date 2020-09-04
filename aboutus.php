<?
 include "includes/common.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Animal Rescue</title>
 		<link rel="stylesheet" type="text/css" href="css/animalstyle.css">
	<link rel="stylesheet" type="text/css" href="css/searchstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <style type="text/css">
        	#aboutbanner{
        	height: 400px;
            width: 100%;
            }
            .about1{
				padding-left: 400px;
				padding-top: 50px;
			}
			.abouth1 img{
				
				height: 200px;
				width: 300px;
			}
			.abouth1{
				float: left;
				display:inline-block;
				height:200px;
				width: 300px;
				margin-top: 23px;
					}
			.abouth2{
				float: left;
				margin-left: 50px;
				display: inline-block;
				height:200px;
				width: 300px;
			}
        </style>
</head>
 </head>
 <body>
 	<?php
 		include "includes/header.php";
 	?>
 	<div class="about">
      <img id="aboutbanner" src="images/aboutbanner.png" alt="about us">
       <div class="about1">
          <div class="abouth1">
          	<img src="images/animalrescue.png" alt="in-image">
          </div>
          <div class="abouth2">
          	<h3>What does we want to prove?</h3>
          	<p>As we coexist with animals we should care to them .Help them in providing shelter to some needy life.We as a team try to provide with various aspects of helping the animals with medical care,finding their new home and various others which will surely become not only beneficial to animals but to humans too.</p>
          </div>
          
       </div>
 	</div>
 
 </body>
 </html>