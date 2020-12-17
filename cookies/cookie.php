
<?php
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$email=$_POST['password'];
	// setcookie("username",$user);
	// setcookie("password",$email);
	setcookie("username",$user,time()+60*60);
	setcookie("password",$email,time()+60*60);
	header("location:cookies.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> 	Non Persistent  cookie</h1>
	<form method="post">
		Enter Username<br>
		<input type="text" name="username"><br>
		Enter Email
		<input type="text" name="password"><br>
		<input type="submit" name="submit" value="submit">
		

	</form>

</body>
</html>