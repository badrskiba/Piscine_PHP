#!/usr/bin/php
<?php
	function ft_is_sort($tab)
	{	
		$i = 0;
		$tmp = $tab;
		sort($tab);
		while ($tab[$i])
		{
			if ($tmp[$i] != $tab[$i])
				return (FALSE);
			$i++;
		}
		return (TRUE);
	}	
?>