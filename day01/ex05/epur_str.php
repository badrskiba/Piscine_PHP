#!/usr/bin/php
<?php
	if($argc == 2)
	{
		$i = 0;
		$line = trim($argv[1]);
		while ($line[$i])
		{
			$ret .=  $line[$i];
			$i++;
			if ($line[$i - 1] == ' ')
				while($line[$i] == ' ')
					$i++;
		}
		echo "$ret\n";
	}
?>