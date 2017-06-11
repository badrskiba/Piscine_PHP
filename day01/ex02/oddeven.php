#!/usr/bin/php
<?php
echo "Entrez un nombre: ";
	while($line = fgets(STDIN))
	{	
		$line = trim($line);
		if (!is_numeric($line))
		{
			echo "'".$line."' n'est pas un chiffre\n";
		}
		else
		{
			echo "le chiffre ".$line." est ";
			$n = intval($line);
			if ($n % 2 == 0)
			{
				echo "Pair\n";
			}
			else
			{
				echo "Impair\n";
			}
		}
		echo "Entrez un nombre: ";
	}
?>