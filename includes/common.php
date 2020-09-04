<?php
	$con=mysqli_connect("localhost:3308","root","","animal") or die(mysqli_connect_error($con));
	if(!isset($_SESSION['email']))
	{
		session_start();
	}
?>