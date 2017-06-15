#!/usr/bin/php
<?php
	date_default_timezone_set('EUROPE/PARIS');
	
	function error()
	{
		echo "Wrong Format\n";
		exit (0);
	}
	
	function check_format($str)
	{
		return(preg_match("/(^[A-Z|a-z]{5,8})( {1})([0-9]{1,2})( {1})([A-Z|a-z]{3,9})( {1})([0-9]{4})( {1})([0-9]{2})([:]{1})([0-9]{2})([:]{1})([0-9]{2})$/", $str));
	}

	function check_for_month($str)
	{
		if (preg_match("/([Jj]anvier)|([Ff][ée]vrier)|([Mm]ars)|([Aa]vril)|([Mm]ai)|([Jj]uin)|([Jj]uillet)|([Aa]o[ûu]t)|([Ss]eptembre)|([Oo]ctobre)|([Nn]ovembre)|([Dd]ecembre)/", $str, $matches))
			return ($matches);
		else
			error();
	}

	function check_for_day($str)
	{
	 if (!preg_match("/^([Ll]undi)|([Mm]ardi)|([Mm]ercredi)|([Jj]eudi)|([Vv]endredi)|([Ss]amedi)|([Dd]imache)$/",$str))
			error();
	}

 	if ($argc > 1)
 	{
 		$str = $argv[1];
 		if(check_format($str))
 		{
 			$tab = explode(" ", $str);
 			$tab2 = explode(":", $tab[4]);
 			check_for_day($tab[0]);
 			$months = check_for_month($tab[2]);
 			$time = mktime($tab2[0], $tab2[1], $tab2[2], count($months) - 1, $tab[1], $tab[3]);
 			echo "$time\n";
 		}
 	} 	
?>