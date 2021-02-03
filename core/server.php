<?php
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['PHP_SELF']."<br>";

function show()
{
	return $_SERVER['HTTP_HOST'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Server name <?php echo show(); ?> </h3>
</body>
</html>