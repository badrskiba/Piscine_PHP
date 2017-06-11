#!/usr/bin/php
<?php
	function ft_new_split($str)
	{
		$str = trim($str);
		$tmp = preg_split("/[ ]+/", $str);
		return($tmp);
	}

	if ($argc >= 2)
	{
		$tab = ft_new_split($argv[1]);
		$i = 1;
		while($tab[$i])
		{
			echo "$tab[$i]";
			echo " ";
			$i++;
		}
		echo "$tab[0]\n";
	}
?>