<?php 
  include "includes/common.php";
  if(!isset($_SESSION['email']))
   {
    header("location:animal.php");
   }
   session_destroy();
   header("location:animal.php");

 ?>