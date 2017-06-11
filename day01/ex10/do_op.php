#!/usr/bin/php
<?php
	if($argc == 4)
	{
		$a = intval($argv[1]);
		$b = trim($argv[2]);
		$c = intval($argv[3]);
		
		if ($b == "+")
			$d = $a + $c;
		else if ($b == "*")
			$d = $a * $c;
		else if ($b == "-")
			$d = $a - $c;
		else if ($b == "/")
				$d = $a / $c;
		else if ($b == "%")
			$d = $a % $c;
		echo "$d\n";
	}
	else
		echo "Incorrect Parameters\n";
?>
