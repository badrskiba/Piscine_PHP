<?php
class Tyrion extends Lannister
{
	public function __construct()
	{
		$this->family = true;
	}
	public function sleepWith($perso)
	{
		if(!$perso->family && !$perso->sexe)
			echo "Let's do this.";
		else
			echo "Not even if I'm drunk !";
		echo "\n";
			return ;
	}
}

?>