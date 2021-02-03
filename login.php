<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
   if(isset($_SESSION['success']))
   {
     echo $_SESSION['success'];
     unset( $_SESSION['success']);
   }

   if(isset($_SESSION['error']))
   {
     echo $_SESSION['error'];
     unset( $_SESSION['error']);
   }

  ?>
<form action="" method="post">
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="text" name="password" placeholder="password"><br><br>
	<input type="submit" name="login" value="Login"/>
	</form>
</body>
</html>




<?php
include ('dbcon.php');
if (isset($_POST['login']))
{
	 echo$user = $_POST['username']; 
	 echo$pwd =  $_POST['password']; 

 $query = "SELECT * FROM  student WHERE username = '$user' && password= '$pwd'";
	$data = mysqli_query($con, $query);

   $total =mysqli_num_rows($data);
	 //echo $total; 

  if($total==1){

        $_SESSION['username'] =$user;
        $_SESSION['success'] ="Redirected to Dashboard";

		header('location:login.php');

	}
	else{

		 $_SESSION['error'] ="Wrong Email or Password";
		 header('location:login.php');
	}

}