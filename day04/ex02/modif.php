<?php
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === 'OK') {
	$user = unserialize(file_get_contents('../private/passwd'));
	foreach ($user as $key => $v) {
		if ($_POST['login'] === $v['login'] && hash('whirlpool', $_POST['oldpw']) === $v['passwd']) {
			$user[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
			$check = TRUE;
			break;
		}
		else 
			$check = FALSE;
	}
	if ($check == TRUE) {
		file_put_contents('../private/passwd', serialize($user));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>