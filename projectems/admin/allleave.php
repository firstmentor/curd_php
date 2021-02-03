<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<a href="../logout.php">Logout</a>
	<table class="table">
		<tr class="table-info">
			<th>Sr N0.</th>
			<th>Employee Name</th>
			<th>Earning Leave</th>
			<th>Medical Leave</th>
			<th>Casual Leave</th>
			<th>Valid From</th>
			<th>Valid To</th>
		</tr>
		<?php
		
		// echo$_SESSION['user_id'];
		include "dbcon.php";
		$i=1;
		$q="select * from assign_leave t1 join user t2 on t1.assign_to=t2.user_id";
		$query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {



		?>


		<tr>
		   <td><?php echo $i++; ?></td>
		   <td><?php echo $result['name']; ?></td>
		   <td><?php echo $result['e_leave']; ?></td>
		   <td><?php echo $result['m_leave']; ?></td>
		   <td><?php echo $result['c_leave']; ?></td>
		   <td><?php echo $result['v_from']; ?></td>
		   <td><?php echo $result['v_to']; ?></td>
		</tr> 

		<?php
		}
		?>  	

	</table>

</body>
</html>