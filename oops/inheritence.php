<?php

/**
 * 
 */
class countries
{
	public $ind="india";
	public $jp="japan";
	public $us="united states";
}


class players extends countries
{
	
	public $name1="Amit";
	public $age2=18;
	public $email="amitsinghrajawat225@gmail.com";
}


class eat extends players
{
	
	public $tea1="tea";
	public function getplayer()
	{
		return $this->name1 ." is pn ".$this->ind ." form ".$this->tea1;
	}
}

$a = new eat();

echo $a->getplayer();

?>