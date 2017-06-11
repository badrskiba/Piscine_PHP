#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = Array_filter(explode(" ", $str));
	if ($str != NULL)
		sort($tab);
	return($tab);
}
?>
