#!/usr/bin/php
<?php
	function matches($matches)
	{
		$tmp1 = $matches[1].strtoupper($matches[2]).$matches[3];
		return($tmp1);
	}
	
	function loop($matches)
	{
		$matches[0] = preg_replace_callback('/(title=\")(.+)(\")/', 'matches', $matches[0]);
		$matches[0] = preg_replace_callback('/(>)(.+?)(<)/', 'matches', $matches[0]);
		return ($matches[0]);
	}

	if ($argc == 2)
	{
		$fd = fopen($argv[1], 'r');
		if ($fd)
		{
			while(!feof($fd))
				$file .= fgets($fd);
		}
		if (!$file)
			exit(0);
		$tmp = preg_replace_callback('/<[aA].+\/[aA]>/', 'loop', $file);
		echo "$tmp\n";
		fclose($fd);
	}
?>