<?php
  require "includes/common.php";
  $emails=$_POST['email'];
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $emails)) {
  header('location: signup.php?email_error=enter correct email');
	}
  $pass=$_POST['password'];
  if(strlen($pass)<6)
  	header('location: signup.php?password_error=enter correct password');
  $emails=mysqli_real_escape_string($con,$emails);
  $pass=mysqli_real_escape_string($con,$pass);
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $phone=mysqli_real_escape_string($con,$_POST['phone']);
  $query="SELECT id FROM user WHERE email='$emails'";
  $res=mysqli_query($con,$query) or die(mysqli_error($con));
  echo "Hello";
  if(mysqli_num_rows($res)>0)
   {
   	echo "Email Aready Exists";
   	header('location:login.php');
   }
   else
   	{
   		$updateq="INSERT INTO user(email,password,name,phone) VALUES('$emails','$pass','$name','$phone')";
   		$ures=mysqli_query($con,$updateq) or die(mysqli_error($con));
   		echo "stored";
   		$_SESSION['email']=$email;
   		$_SESSION['id']=mysqli_insert_id($con);	
   		$_SESSION['name']=$name;
   header('location: animal.php');
   }



?>