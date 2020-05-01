<?php

/**
 * 
 */
class mpct /**extends AnotherClass */
{

	public $name ="Amit";
	public $age  =12;


	
	 public function hello()
	{
		echo "hello mpct";
	}
}

$a=new mpct();

echo $a->name;
$a->hello();