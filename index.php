<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
  <?php 
   if(isset($_SESSION['success']))
   {
     echo $_SESSION['success'];
     unset( $_SESSION['success']);
   }

  ?>

    <form method="post" action="insert.php">
     
		
		Username:<input type="text" name="username">
    <br>
		Password:<input type="text" name="password">
    <br>
    

    

		<input type="submit" name="submit" value="Submit">
    <input type="submit" name="login" value="login">

	</form>

</body>
</html>


