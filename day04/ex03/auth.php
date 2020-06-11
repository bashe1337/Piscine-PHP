<?php

function auth($login, $passwd) {
	$user = unserialize(file_get_contents('../private/passwd'));
	foreach ($user as $k => $v) {
		if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
			return TRUE;
	}
	return FALSE;
}