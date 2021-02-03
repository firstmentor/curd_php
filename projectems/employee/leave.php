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
	<a href="all_applyleave.php">All Apply Leave</a>
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
		$user_id=$_SESSION['user_id'];
		$q="select * from assign_leave t1 join user t2 on t1.assign_to=t2.user_id where t2.user_id=$user_id";
		$query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {



		?>


		<tr>
		   <td><?php echo $i++; ?></td>
		   <td><?php echo $result['name']; ?></td>
		   <td class="e_leave"><?php echo $result['e_leave']; ?></td>
		   <td class="m_leave"><?php echo $result['m_leave']; ?></td>
		   <td class="c_leave"><?php echo $result['c_leave']; ?></td>
		   <td class="v_from"><?php echo $result['v_from']; ?></td>
		   <td class="v_to"><?php echo $result['v_to']; ?></td>
		</tr> 

		<?php
		}
		?>  	

	</table>



	<!----leave form------------------------->

	<div class="container">
		<div class="row">
			<h3>Apply Leave</h3>
			

       <form action="" method="post">
						
			<div class="col-md-9">


				
				

				
            <input type="hidle" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
            <div class="form-group">

					<label class="col-lg-3 control-label">Leave From:</label>
					<div class="col-lg-9">
					<input type="date" name="l_from" placeholder="dd/mm/yyyy" class="form-control" onblur="checkDate(this.value)">
				    </div>
					
				</div>

				<div class="form-group">

					<label class="col-lg-3 control-label">Leave To:</label>
					<div class="col-lg-9">
					<input type="date" name="l_to" placeholder="dd/mm/yyyy" class="form-control" onblur="checkDate(this.value)">
				    </div>
					
				</div>
				<div class="form-group">

					<label class="col-lg-3 control-label">Earning Leave:</label>
					<div class="col-lg-9">
					<input type="text" name="eleave" placeholder="No. of Leave" class="form-control">
				    </div>
					
				</div>

				<div class="form-group">

					<label class="col-lg-3 control-label">Medical Leave:</label>
					<div class="col-lg-9">
					<input type="text" name="mleave" placeholder="No. of Leave" class="form-control">
				    </div>
					
				</div>

				<div class="form-group">

					<label class="col-lg-3 control-label">Casual Leave:</label>
					<div class="col-lg-9">
					<input type="text" name="cleave" placeholder="No. of Leave" class="form-control">
				    </div>
					
				</div>
			</div>


		
		</div>	
		<br>
     <button class="btn btn-info " name="leave">Submit Leave</button>
	
	</div><!--container end-->	



 </form>

	<script>
	
	function checkDate(str)
	{
		//alert('text');
		var vfrm =$('.v_from').text();
		//alert(vfrm);
		var vto =$('.v_to').text();
		var ifrm =str;

		var date1 =new Date(vfrm);
		var date2 = new Date(ifrm);
		var diffDays = parseInt((date2 - date1) /  (1000 * 60 * 60 * 24));

		var date3 =new Date(vfrm);
		var date4 = new Date(vto);
		var diffDays2 = parseInt((date4 - date3) /  (1000 * 60 * 60 * 24));

		if(diffDays>=0 && diffDays2>=0)
		{

		}
		else
		{
			alert('please enter valid date');
		}	
	}
</script>

</body>
</html>


<?php
include "dbcon.php";
if(isset($_POST['leave']))
{
	 echo$l_from =$_POST['l_from'];
	 echo$l_to =$_POST['l_to'];
	 $eleave =$_POST['eleave'];
	  $mleave =$_POST['mleave'];
	  $cleave =$_POST['cleave'];
	   $apply_by =$_POST['user_id'];
	   $status ="Pending";
	  
	 //print_r($emplist);
	

	 	$query="INSERT INTO apply_leave(l_from,l_to,eleave,mleave,cleave,apply_by,status)VALUES('$l_from','$l_to',' $eleave','$mleave','$cleave','$apply_by','$status')";
	 	$res=mysqli_query($con,$query);



	

}


?>


