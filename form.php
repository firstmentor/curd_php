
<?php

include('dbcon.php');

  if(isset($_POST['a'])){

    echo$name= $_POST['name'];
    echo$college =$_POST['college'];
    echo$gender =$_POST['gender'];
    echo$education =$_POST['education'];

    $b=implode(",",$education);

       


    $filename = $_FILES['file'] ['name'];
    $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/" .$filename;

    move_uploaded_file($tempname, $file);
   echo "<img src='$file' height='100' width='100' />";
    


   

  

 $q ="INSERT INTO student1 (name, college,gender,education,file) VALUES ('$name', '$college','$gender','$b','$file')";

  $query =mysqli_query($con, $q);
  if( $query)
  {
  	header('location:form.php');
  }
  // header('location:select.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="post" enctype="multipart/form-data">
    
		1Name:<input type="text" name="name" >
   
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
        

        

        
		<input type="submit" name="a" value="Submit">
		


	</form>

</body>
</html>