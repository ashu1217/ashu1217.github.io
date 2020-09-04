<?php
	include "includes/common.php";
	$emails=mysqli_real_escape_string($con,$_POST['email']);
	$pass=mysqli_real_escape_string($con,$_POST['password']);
	md5($pass);
	$query="SELECT * from user WHERE email='$emails' && password='$pass';";
    $result=mysqli_query($con,$query) or die(mysqli_error($con));;
    if(mysqli_num_rows($result)==0)
    {
    	echo "No users Found";
    }
    else
    {
    	$row=mysqli_fetch_array($result);
    	$_SESSION['email']=$emails;
    	$_SESSION['name']=$row['name'];
    	$_SESSION['id']=$row['id'];
    	header('location:animal.php');
    }

?>