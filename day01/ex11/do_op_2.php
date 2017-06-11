#!/usr/bin/php
<?php
function do_op($argv, $sign)
{
	if (is_numeric(trim($argv[0])) == FALSE || is_numeric(trim($argv[1])) == FALSE)
		echo "Syntax Error\n";
	else
	{
		$a = intval($argv[0]);
		$b = intval($argv[1]);
		
		if ($sign == "+")
			$d = $a + $b;
		else if ($sign == "*")
			$d = $a * $b;
		else if ($sign == "-")
			$d = $a - $b;
		else if ($sign == "/")
				$d = $a / $b;
		else if ($sign == "%")
			$d = $a % $b;
		echo "$d\n";
	}
}

	if ($argc != 2)
	{
		echo "Incorrect Parameters\n";
	}
	else
	{
		if (!preg_split('/[+]/', $argv[1])[2] && preg_split('/[+]/', $argv[1])[1]
		 && preg_split('/[+]/', $argv[1])[0])
		{
			$tmp = preg_split('/[+]/', $argv[1]);
			do_op($tmp, '+');
		}
		else if (!preg_split('/[-]/', $argv[1])[2]  && preg_split('/[-]/', $argv[1])[1]
		 && preg_split('/[-]/', $argv[1])[0])
		{
			$tmp = preg_split('/[-]/', $argv[1]);
			do_op($tmp, '-');
		}
		else if (!preg_split('#[/]#', $argv[1])[2] && preg_split('#[/]#', $argv[1])[1] 
			&& preg_split('#[/]#', $argv[1])[0])
		{
			$tmp = preg_split('#[/]#', $argv[1]);
			do_op($tmp, '/');
		}
		else if (!preg_split('/[*]/', $argv[1])[2]  && preg_split('/[*]/', $argv[1])[1] 
			&& preg_split('/[*]/', $argv[1])[0])
		{
			$tmp = preg_split('/[*]/', $argv[1]);
			do_op($tmp, '*');
		}
		else if (!preg_split('/[%]/', $argv[1])[2]  && preg_split('/[%]/', $argv[1])[1] 
			&& preg_split('/[%]/', $argv[1])[0])
		{
			$tmp = preg_split('/[%]/', $argv[1]);
			do_op($tmp, '%');
		}
		else
			echo "Syntax Error\n";
	}
	
?>