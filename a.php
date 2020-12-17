<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
	    </tr>


	    <?php
	      include "dbcon.php";
	      $data="select * from student";
	      $result=mysqli_query($con, $data);
	     while($a=mysqli_fetch_array($result))
	     {
	     ?>
	    <tr>
	       <td><?php echo$a['id'];?> </td>
	       <td><?php echo$a['username'];?></td>
	       <td><?php echo$a['password'];?></td>
	       <td>
	       	 <a href="view.php?id=<?php echo$a['id'];?>">View</a>
	       	 <a href="edit.php?id=<?php echo$a['id'];?>">Edit</a>
	       	 <a href="delete.php?id=<?php echo$a['id'];?>">Delete</a>
	       </td>   	 
	    </tr> 
	    <?php
	    }
	    ?>  		
		



	</table>

</body>
</html>