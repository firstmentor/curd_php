<!-- view-->
<?php
include ('dbcon.php');


$id =$_GET['id']; 

$query ="select * From student where id=$id"; 
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];


?>


<!---update--->

<?php
  
  if(isset($_POST['update'])){

      echo $username = $_POST['username'];
       echo $password = $_POST['password'];

$query ="UPDATE student SET username = '$username',password = '$password' where id=$id";
$fire = mysqli_query($con, $query);

      // // //if($fire)echo "data updated successfully.";
 if($fire) header("Location:display.php");

  } 



?>



<html>
<head>

	<title></title>
</head>	
<body>

	<h4>Edit</h4>

    <form method="post" action="">
		
		Username:<input type="text" name="username" value="<?php echo $user['username'] ?>">
		<br>
		Password:<input type="text" name="password" value="<?php echo $user['password'] ?>">
		<br>
      


      <input type="submit" name="update" value="Update">

	</form>

</body>
</html>