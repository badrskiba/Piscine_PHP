<?php 

class Tyrion extends Lannister
{
	public function __construct()
	{
		parent::__construct() ;
		echo "My name is Tyrion\n";
		return;
	}
	public function getSize()
	{
		echo "Short";
		return;
	}	
}

?>