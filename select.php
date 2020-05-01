<?php
 include ('dbcon.php');
 if(isset($_REQUEST['update']))
 {
 	$file=$_FILES["file"]["name"];
    echo $file;
    $tmp_name =$_FILES["file"]["tmp_name"];
    $path ="upload/".$file;
    //only jpg,png,upload

    $file1 =explode(".", $file); //image.jpg Arrays
    echo $file1[1];   //jpg
    $ext =$file1[1];
    $allowed=array("jpg","png","gif");
    $id=$_REQUEST['id'];
    if(in_array($ext, $allowed))
    {	

    move_uploaded_file($tmp_name,$path);
    $query ="UPDATE student1 SET file = '$file'where id='$id' ";
  	$fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

}
}	





?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
</head>
<body>

	<div class="container">
	<div class="col-lg-12">
	<h1 class="text-center text-warning">Display Table Data</h1>
	<br>
	<br>

	 <table class="table table-striped table-bordered">
	 	<tr class="text-center bg-dark text-white">
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Gollege</th>
	 		<th>Gender</th>
	 		<th>Education</th>
	 		<th>Image</th>
	 		<th> Action</th>
	 		
	 	</tr>
   <?php

       include ('dbcon.php');

      // $q = "select * from student1";
       // $q = "select * from student1 where id='21' ";
      $q = "select * from student1 order by id desc"; 
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
       	         
     ?>



	 	<tr class="text-center">
	 		<td><?php echo $result['id']?></td>
	 		<td><?php echo $result['name']?></td>
	        <td><?php echo $result['college']?></td>
	 		<td><?php echo $result['gender']?></td>
	 		<td><?php echo $result['education']?></td>
	 		<td><img src="upload/<?php echo $result['file']?>" width="100" height="100">

	 			<br>
	 			<form method="post" enctype="multipart/form-data">
	 			<input type="hidden" name="id" value="<?php echo $result['id']?>">	
	 			<input type="file" name="file">
	 			<br><input type="submit" name="update" value="update">
	 		    </form>




	 		</td>
	 		
	 <td><a href="update1.php?id=<?php echo $result['id'];?>">Update</a>
	 <a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
	 		

         </tr>

        <?php
         }
        ?>





	 </table>	

</body>
</html>