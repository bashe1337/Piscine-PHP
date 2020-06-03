#!/usr/bin/php
<?php
function ft_split($string) {
	$string = explode(" ", $string);
	$string = array_diff($string, ["", " "]);
	return ($string);
}

$str = ft_split($argv[1]);
$i = 0;
while (1) {
	if (!is_string($str[$i + 1]))
		break;
	$copy = $str[$i + 1];
	$str[$i + 1] = $str[$i];
	$str[$i] = $copy;
	$i++;
}

for ($i = 0; $i < (count($str)-1); $i++)
	echo($str[$i]." ");
echo($str[$i]."\n");
?>