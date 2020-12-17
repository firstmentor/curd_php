
 
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From student1 where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);


//checkbox code
$a=$user['education'];
//echo $a;
$b=explode(",", $a); //checkbox
//echo $b; //array

//end checkbox code

echo $user['name'];

}
?>





<!--update--->
<?php
  
  if(isset($_POST['update'])){

  	    $name = $_POST['name'];
  	    $college = $_POST['college'];
  	    $gender = $_POST['gender'];
  	    $c = $_POST['education'];
  	    $d=implode(",", $c);

  	  $query ="UPDATE student1 SET name = '$name',college = '$college',gender = '$gender',education='$d' where id=$id";
  	  $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

  	  //if($fire)echo "data updated successfully.";
  	  if($fire) header("Location:select.php");

  } 



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		Name:<input type="text" name="name" value="<?php echo $user['name'] ?>" >
		<br>
		<br>
		College:<select name="college">
			<option >Select</option>
			<option value="rjit"
				<?php 
				if($user["college"]=='rjit')
				{
					echo "selected";
				}

                ?>
			>RJIT</option>
			<option value="mpct"
			<?php 
				if($user["college"]=='mpct')
				{
					echo "selected";
				}

                ?>

			>mpct</option>
			<option value="itm"
			<?php 
				if($user["college"]=='itm')
				{
					echo "selected";
				}

             ?>


			>itm</option>
			<option value="jaincollege"

			<?php 
				if($user["college"]=='jaincollege')
				{
					echo "selected";
				}

             ?>
			>jain college</option>
		    </select>
			<br>
			<br>

	    Gender:<input type="radio" name="gender" value="male"
	      <?php 
				if($user["gender"]=='male')
				{
					echo "checked";
				}

             ?>



	    >Male
	           <input type="radio" name="gender" value="female"

	           <?php 
				if($user["gender"]=='female')
				{
					echo "checked";
				}

             ?>
 


	           >FeMale
	           <input type="radio" name="gender" value="other"

	           <?php 
				if($user["gender"]=='other')
				{
					echo "checked";
				}

             ?>



	           >other
               <br>
               <br>
        Education:<input type="checkbox" name="education[]" value="mca"
        <?php
        if(in_array("mca", $b))
        {
        	echo "checked";
        }	
        ?>
        >MCA
        <input type="checkbox" name="education[]" value="ca"
        <?php
        if(in_array("ca", $b))
        {
        	echo "checked";
        }	
        ?>


        >CA      
        <input type="checkbox" name="education[]" value="ma"
        <?php
        if(in_array("ma", $b))
        {
        	echo "checked";
        }	
        ?>


        >MA
        <input type="checkbox" name="education[]" value="bba"
        <?php
        if(in_array("bba", $b))
        {
        	echo "checked";
        }	
        ?>
        >BBA

        <br>
        <br>
        File Upload:<input type="file" name="file">

        <br>
        <br>
		<input type="submit" name="update" value="Update">
		


	</form>

</body>
</html>


