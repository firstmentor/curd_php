<?php
class a{

	public $name="raj";

	// public function __construct($n){
	// 	$this->name =$n;
	// }

	public function show(){
		echo "your Name :". $this->name. "<br>";
	}

}

//$test =new a("vikas");
$test =new a();
$test->show();