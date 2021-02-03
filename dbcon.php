<?php

$con = mysqli_connect('localhost', 'root', '', 'curd1');


if($con)
{
	echo "connected";
}
else{

	echo "not connect";

}

?>


