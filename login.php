<?php
session_start();
include ('dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="text" name="pass" placeholder="password"><br><br>
	<input type="submit" name="login" value="Login"/>
	</form>
</body>
</html>

<?php

if (isset($_POST['login']))
{
	echo$user = $_POST['username'];
	echo$pwd =  $_POST['password'];

	$query = "SELECT * FROM  student WHERE username = '$user' && password= '$pwd'";
	$data = mysqli_query($con, $query);
	$total =mysqli_num_rows($data);
	 echo $total;

	if($total==1){

        $_SESSION['username'] =$user;
		header('location:logindata.php');

	}
	else{

		echo "login failed";
	}

}