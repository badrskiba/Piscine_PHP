<?php

abstract class house
{
	abstract function getHouseName();
	abstract function getHouseMotto();
	abstract function getHouseSeat();

	public function introduce()
	{
		echo "House ";
		echo $this->getHouseName()." of ";
		echo $this->getHouseSeat()." : \"";
		echo $this->getHouseMotto()."\"\n";
	}
}

?>