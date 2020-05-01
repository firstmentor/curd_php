
<?php
error_reporting(0);
include('dbcon.php');

  if(isset($_POST['submit'])){

    $name= $_REQUEST['name'];
    $college =$_REQUEST['college'];
    $gender =$_REQUEST['gender'];
    echo$education =$_REQUEST['education'];



    $b=implode(",",$education);

    //echo $b;






    $file=$_FILES["file"]["name"];
    //echo $file;
    $tmp_name =$_FILES["file"]["tmp_name"];
    $path ="upload/".$file;
    //only jpg,png,upload

    $file1 =explode(".", $file); //image.jpg Arrays
    //echo $file1[1];   //jpg
    $ext =$file1[1];
    $allowed=array("jpg","png","gif");
    if(in_array($ext, $allowed))
    {	

    move_uploaded_file($tmp_name,$path);


   

  

 $q ="INSERT INTO student1 (name, college,gender,education,file) VALUES ('$name', '$college','$gender','$b','$file')";

  $query =mysqli_query($con, $q);
  if( $query)
  {
  	echo "okk";
  	}
  // header('location:select.php');
}



}





?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		Name:<input type="text" name="name" >
		<br>
		<br>
		College:<select name="college">
			<option value="select">Select</option>
			<option value="rjit">RJIT</option>
			<option value="mpct">mpct</option>
			<option value="itm">itm</option>
			<option value="jaincollege">jain college</option>
		    </select>
			<br>
			<br>

	    Gender:<input type="radio" name="gender" value="male">Male
	           <input type="radio" name="gender" value="female">FeMale
	           <input type="radio" name="gender" value="other">other
               <br>
               <br>
        Education:<input type="checkbox" name="education[]" value="mca">MCA
        <input type="checkbox" name="education[]" value="ca">CA      
        <input type="checkbox" name="education[]" value="ma">MA
        <input type="checkbox" name="education[]" value="bba">BBA

        <br>
        <br>
        File Upload:<input type="file" name="file">

        <br>
        <br>
		<input type="submit" name="submit" value="Submit">
		


	</form>

</body>
</html>