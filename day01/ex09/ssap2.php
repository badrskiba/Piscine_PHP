#!/usr/bin/php
<?
	function ft_split($str)
	{
		$tab = Array_filter(explode(" ", $str));
		return($tab);
	}
	$i = 1;
	$tmp = array();
	while($argv[$i])
	{
		$tab = ft_split($argv[$i]);
		$tmp = array_merge($tmp, $tab);
		$i++;
	}
	$i = 0;
	while($tmp[$i])
	{
		if (ctype_alpha($tmp[$i]) == TRUE)
			$alpha[] = $tmp[$i];
		$i++;
	}
	$i = 0;
	while($tmp[$i])
	{
		if (is_numeric($tmp[$i]) == TRUE)
			$num[] = $tmp[$i];
		$i++;
	}
	$i = 0;
	while($tmp[$i])
	{
		if (is_numeric($tmp[$i]) == FALSE && ctype_alpha($tmp[$i]) == FALSE)
			$others[] = $tmp[$i];
		$i++;
	}
	if ($alpha)
		sort($alpha, SORT_STRING | SORT_FLAG_CASE);
	if ($num)
		sort($num, SORT_NUMERIC);
	if($others)
		sort($others);
	$i = 0;
	while($alpha[$i])
	{
		echo "$alpha[$i]\n";
		$i++;
	}
	$i = 0;
	while($num[$i])
	{
		echo "$num[$i]\n";
		$i++;
	}
	$i = 0;
	while($others[$i])
	{
		echo "$others[$i]\n";
		$i++;
	}
?>