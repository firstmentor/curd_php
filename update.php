<?php
include ('dbcon.php');

if (isset($_GET['id']))2
{
echo$id =$_GET['id'];
$query ="select * From student where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
echo $user['username'];

}
?>





<!--update--->
<?php
  
  if(isset($_POST['update'])){

  	    $username = $_POST['username'];
  	    $pass = $_POST['pass'];

  	  $query ="UPDATE student SET username = '$username',pass = '$pass' where id=$id";
  	  $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

  	  //if($fire)echo "data updated successfully.";
  	  if($fire) header("Location:display.php");

  } 



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div class="col-lg-6 m-auto">
	<form method="post">
		<br><br><div class="card">
			<div class="card-header bg -dark">
				<h1 class="text-info text-center">Update</h1>
			</div><br><br>


			<label>Username:</label>
			<input type="text" name="username" class="form-control" value="<?php echo $user['username'] ?>"><br>
			<label>Password:</label>
			<input type="text" name="pass" class="form-control" value="<?php echo $user['pass'] ?>"><br/><br/>
			<button class="btn btn-success" type="submit" name="update">Update</button><br>
				

		

        </div>


	</form>

</body>
</html>