#!/usr/bin/php
<?php
function ft_split($string) {
	$string = explode(" ", $string);
	$string = array_diff($string, ["", " "]);
	sort($string);
	return ($string);
}

unset($argv[0]);

$str = implode(" ", $argv);
$str = ft_split($str);
sort($str);
foreach ($str as $value)
	echo($value."\n");
?>