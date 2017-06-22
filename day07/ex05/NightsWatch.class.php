<?php

class NightsWatch
{
	private $people;
	public function __construct()
	{
		$this->people = array();
	}

	public function recruit($perso)
	{
		if ($perso instanceof IFighter)
				$this->people[] = $perso;
	}

	public function fight()
	{
		foreach ($this->people as $perso) 
		{
				$perso->fight();
		}

	}
}