#!/usr/bin/php
<?php
function ft_split($string) {
	$string = explode(" ", $string);
	$string = array_diff($string, ["", " "]);
	return ($string);
}

$i = 0;

$arr_months = array(0 => '/[Jj]anvier/', 1 => '/[Ff][eé]vrier/', 2 => '/[Mm]ars/', 3 => '/[Aa]vril/', 4 => '/[Mm]ai/', 5 => '/[Jj]uin/', 6 => '/[Jj]uillet/', 7 => '/[Aa]o[uû]t/', 8 => '/[Ss]eptembre/', 9 => '/[Oo]ctobre/', 10 => '/[Nn]ovembre/', 11 => '/[Dd][ée]cembre/');
$replace = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
if ($argc <= 1)
	return;
date_default_timezone_set("Europe/Paris");

if (!preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) [0-9][0-9]? ([Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/", $argv[1])) {
	echo ("Wrong Format\n");
	return;
}
$str = ft_split($argv[1]);
foreach ($arr_months as $value) {
	if (preg_match($value, $str[2])) {
		break;
	}
	else {
		$i++;
	}
}
$str[2] = str_replace($str[2], $replace[$i], $str[2]);

$result = strtotime("$str[3]-$str[2]-$str[1] $str[4]");

echo $result;

?>