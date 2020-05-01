<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form  method="post" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value="">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php
 $filename = $_FILES['uploadfile'] ['name'];
 $tempname = $_FILES['uploadfile'] ['tmp_name'];

 //$folder = "upload/";
 $folder = "upload/" .$filename;

 
 //print_r($_FILES['uploadfile']);

    //echo $folder;

    move_uploaded_file($tempname, $folder);
    echo "<img src='$folder' height='100' width='100' />";

 ?>

 