#!/usr/bin/php
<?php
if ($argc <= 1)
	return;
$str = $argv[1];
$str = preg_replace("/[\s,\t]+/", " ", $str);
$str = trim($str);
echo($str."\n");
?>