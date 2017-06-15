#!/usr/bin/php
<?php
	$str = shell_exec("finger -l");
	preg_match('/Login: (\w+)/', $str, $matches);
	$login = $matches[1];
	preg_match_all('/On\ssince\s\w{3}\s(.{12})(.{11})(\w*)/', $str, $matches);
	$len = count($matches[0]);
	$i = -1;
	while(++$i < $len)
		echo $login." ".$matches[3][$i]." ".$matches[1][$i] . "\n";
?>