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
	sort($tmp);
	$i = 0;
	while($tmp[$i])
	{
		echo "$tmp[$i]\n";
		$i++;
	}
?>
