<?php
class a{

	protected $name="raj";

	// public function __construct($n){
	// 	$this->name =$n;
	// }

	protected function show(){
		echo "your Name :". $this->name. "<br>";
	}

}

 class derived extends a{

 	public function get()
 	{
 		echo "your Name : ". $this->name . "<br>";
 	}


 }




//$test =new a("vikas");
// $test =new a();
// $test->show();


$test =new derived();
$test->get ();