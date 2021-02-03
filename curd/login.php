<?php 
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="" method="post">
		<input type="email" name="email" placeholder="email"><br><br>
		<input type="password" name="password" placeholder="password"><br><br>
		<input type="submit" name="submit" value="login">
	</form>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$email =$_POST['email'];
	$pwd =$_POST['password'];

$query= "SELECT * FROM signin WHERE username='$email' && password ='$pwd'";
$data=mysqli_query($con,$query);
$total =mysqli_num_rows($data);
	echo $total;echo "<br>";
if ($total==1) {
	$_SESSION['username']=$email;
	header('location:index.php');	
}
else{
	echo "login failed";
}


}


?>