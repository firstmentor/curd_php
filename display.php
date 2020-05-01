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
	 		<th> Username</th>
	 		<th> Password</th>
	 		<th> Image</th>
	 		
	 		<th> Action</th>
	 		
	 	</tr>
   <?php

       include ('dbcon.php');

       $q = "select * from student";
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
       	         
     ?>



	 	<tr class="text-center">
	 		<td><?php echo $result['id']?></td>
	        <td><?php echo $result['username']?></td>
	 		<td><?php echo $result['pass']?></td>
	 		<td><img src="<?php echo $result['image']?>" width="100" height="100"></td>
	 		
	 <td><a href="update.php?id=<?php echo $result['id'];?>">Edit</a>
	 <a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
	 		

         </tr>

        <?php
         }
        ?>
<img src="" width="100" height="100">




	 </table>	

</body>
</html>