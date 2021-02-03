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
			<th>Status</th>
			<th>Comment</th>
			<th></th>
		</tr>
		<?php
		
		// echo$_SESSION['user_id'];
		include "dbcon.php";
		$i=1;
		$q="select * from apply_leave t1 join user t2 on t1.apply_by=t2.user_id";
		$query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {



		?>


		<tr>
		   <td><?php echo $i++; ?></td>
		   <td><?php echo $result['name']; ?></td>
		   <td><?php echo $result['eleave']; ?></td>
		   <td><?php echo $result['mleave']; ?></td>
		   <td><?php echo $result['cleave']; ?></td>
		   <td><?php echo $result['l_from']; ?></td>
		   <td><?php echo $result['l_to']; ?></td>
		    <td><?php echo $result['status']; ?></td>
		    <td>
		      <form method="post" action="" >
		      <textarea name="comment"> </textarea> 
		    </td>  	
		      <input type="" name="a_id" value="<?php echo $result['a_id'];?>">
		      
		
		    <td>
		    	<button type="submit" name="approved" class="btn btn-primary">Approved</button>
		    	<button type="submit" name="rejected" class="btn btn-primary">Reject</button>

		    </form>
		    </td>	



		    
		</tr> 

		<?php
		}
		?>  	

	</table>

</body>
</html>


<?php
include "dbcon.php";
if(isset($_POST['approved']))
{
	$status="Approved";
	$comment=$_POST['comment'];
	$id=$_POST['a_id'];
	
	 echo$query="UPDATE apply_leave set status='$status', comment='$comment' where a_id=$id";
	
	$res=mysqli_query($con,$query);
	
	

}
if(isset($_POST['rejected']))
{
	$status= "Rejected";
	$comment=$_POST['comment'];
	$id=$_POST['a_id'];
	
	$query="UPDATE `apply_leave` set `status`='$status', `comment`='$comment' where `a_id`='$id'";
	
	$res=mysqli_query($con,$query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
}


?>