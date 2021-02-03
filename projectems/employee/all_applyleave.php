<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>
<body>
	<a href="../logout.php">Logout</a>
	
	<table class="table">
		<tr class="table-info">
			<th>Sr N0.</th>
			
			<th>Earning Leave</th>
			<th>Medical Leave</th>
			<th>Casual Leave</th>
			<th>Leave From</th>
			<th>Laeave To</th>
			<th>Status</th>
		</tr>
		<?php
		
		// echo$_SESSION['user_id'];
		include "dbcon.php";
		$i=1;
		$user_id=$_SESSION['user_id'];
		$q="select * from apply_leave where apply_by=$user_id";
		$query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {



		?>


		<tr>
		   <td><?php echo $i++; ?></td>
		   
		   <td class="e_leave"><?php echo $result['eleave']; ?></td>
		   <td class="m_leave"><?php echo $result['mleave']; ?></td>
		   <td class="c_leave"><?php echo $result['cleave']; ?></td>
		   <td class="v_from"><?php echo $result['l_from']; ?></td>
		   <td class="v_to"><?php echo $result['l_to']; ?></td>
		   <td class="v_to"><?php echo $result['status']; ?></td>
		</tr> 

		<?php
		}
		?>  	

	</table>


</body>
</html>
	<!----leave form------------------------->




