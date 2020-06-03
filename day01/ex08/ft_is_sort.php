<?php
function ft_is_sort($str) {
$check = $str;
sort($check);

if ($check == $str)
	return TRUE;
else
	return FALSE;
}
?>