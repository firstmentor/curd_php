<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>



		
		<?php

       include ('dbcon.php');

       $q = "select * from student";
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
       	         
     ?>



	 	<tr>
	 		<td><?php echo $result['id']?></td>
	        <td><?php echo $result['username']?></td>
	 		<td><?php echo $result['pass']?></td>
	 		
	        <td>
	 	       <a href="#">Update</a>
	           <a href="#">Delete</a>
	        </td>
	 		

         </tr>

        <?php
         }
        ?>

		




	</table>

</body>
</html>