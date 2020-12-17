<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From student where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
echo $user['username'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Username:<?php echo $user['username'] ?></h2>
	<h2>Password:<?php echo $user['password'] ?></h2>

</body>
</html>

