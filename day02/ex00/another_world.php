#!/usr/bin/php
<?php
	$ret = preg_replace('/\s+/', ' ', trim($argv[1]));
	if ($argc > 1)
		print($ret."\n");
?>