#!/usr/bin/php
<?php
$str = $argv[1];
$str = trim($str);
for ($i = 0; $i < strlen($str); $i++) {
	while ($str[$i] == " ") {
		if ($str[$i + 1] != " ")
			echo(" ");
		$i++;
	}
	echo($str[$i]);
}
?>