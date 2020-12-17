<?php

$con = mysqli_connect('localhost', 'root', '', 'emd');


if($con)
{
	echo "connected";
}
else{

	echo "not connect";

}

?>


