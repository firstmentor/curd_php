<?php

$courses = array("c++"=>"1000","java"=>"1200","php"=>"1500");

//echo "<pre>";

//print_r($courses);

//echo $courses['c++'];

foreach ($courses as $key => $value) {
	echo "key is ".$key." value is ".$value."<br>" ;
}

?>