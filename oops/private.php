<?php
class a{

	private $name;

	public function __construct($n){
		$this->name =$n;
	}

	Private function show(){
		echo "your Name :". $this->name. "<br>";
	}

}

$test =new a("yehoo");
//$test->show();