<?php   
include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$username= $_POST['username'];
    echo$pass =$_POST['pass'];


 	$filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];
    echo$image = "upload/" .$filename;
    move_uploaded_file($tempname, $image);
   echo "<img src='$image' height='100' width='100' />";






 $q ="INSERT INTO student (username, pass,image) VALUES ('$username', '$pass','$image')";

  $query =mysqli_query($con, $q);




}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>


	<form method="post" action="" enctype="multipart/form-data">
		
		Username:<input type="text" name="username">
		<br>
		Password:<input type="text" name="pass">
		<br>
		Image:<input type="file" name="image">

		<input type="submit" name="submit" value="Submit">

	</form>

</body>
</html>