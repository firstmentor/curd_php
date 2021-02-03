<?php

  if(isset($_POST['submit'])){
    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $file = "upload/" .$filename;

    move_uploaded_file($tempname, $file);
   echo "<img src='$file' height='100' width='100' />";



  }
    

   //  $filename = $_FILES['image'] ['name'];
   //  $tempname = $_FILES['image'] ['tmp_name'];

   //  $image = "upload/" .$filename;

   //  move_uploaded_file($tempname, $image);
   // echo "<img src='$image' height='100' width='100' />";




 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form  method="post" enctype="multipart/form-data">

		<input type="file" name="image" value=""> 



		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>


  

 