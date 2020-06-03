#!/usr/bin/php
<?php
while (!feof(STDIN)) {
	echo("Enter a number: ");
	$number = trim(fgets(STDIN));
	if (is_numeric($number)) {
		if ($number % 2 == 0)
			echo("The number ".$number." is even\n");
		else
			echo("The number ".$number." is odd\n");
	}
	elseif ($number == "\04") {
		break;
	}
	else
		echo("'".$number."'"." is not a number\n");
	}
?>