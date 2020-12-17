<?php
  session_start();
   
   include "dbcon.php";
if(isset($_POST['submit']))
{

   echo $user=$_POST['username'];
   echo $pass=$_POST['password'];


  $q ="INSERT INTO student (username, password) VALUES ('$user', '$pass')";

  $f=mysqli_query($con, $q);
  if($f)
  {

  	//echo "<script>alert('data save')</script>";
  	$_SESSION['success']="Data Insert Successful"; 
  	header('location:index.php');

  }
  else
  {
  	echo "<script>alert('Data Not Save')</script>";
  }

}


?>