#!/usr/bin/php
<?php
	function ft_split($string) {
		$string = explode(" ", $string);
		$string = array_diff($string, ["", " "]);
		$string = array_unique($string);
		sort($string);
		return ($string);
	}
?>