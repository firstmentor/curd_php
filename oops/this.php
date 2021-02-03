<?php

class mpct 
{
	public $name = "amit";
	public $age  = 20;
	public $email = "amitsinghrajawat225@gmail.com";


	public function user()
	{
		echo $this->name .$this->email.$this->age;
	}
}




$hello =new mpct;
$hello->user();

?>