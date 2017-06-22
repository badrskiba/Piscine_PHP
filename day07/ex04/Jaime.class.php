<?php

class Jaime extends lannister{
	
	public function __construct()
	{
		$this->family = true;
	}
	
	public function sleepWith($perso)
	{	
		if(!$perso->family && !$perso->sexe)
			echo "Let's do this.";
		else
		{
			if($perso->family && $perso->sexe)
				echo "Not even if I'm drunk !";
			else
				echo "With pleasure, but only in a tower in Winterfell, then.";
		}
		echo "\n";
			return ;
	}
}
?>