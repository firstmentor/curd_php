<?php

session_start();
include("dbcon.php");
$username = $_SESSION['username'];

if($username == true)
{

}
else{

	header('location:login.php');
}

$query ="SELECT * FROM student WHERE username = '$username'" ;
$data = mysqli_query($con,$query);
$result =mysqli_fetch_assoc($data);
echo "Welcome " .$result['username'];
echo "Welcome " .$result['name'];


?>


<a href="logout.php">Logout</a>