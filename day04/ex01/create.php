<?php
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === 'OK') {
	if (!file_exists('../private'))
		mkdir('../private');
	if (!file_exists('../private/passwd'))
		file_put_contents('../private/passwd', null);
	$users = unserialize(file_get_contents('../private/passwd'));
	if ($users) {
			foreach ($users as $key => $value) {
				if ($_POST['login'] === $value['login']) {
						echo "ERROR\n";
						return;
					}
				}
		}
	$new_user['login'] = $_POST['login'];
	$new_user['passwd'] = hash("whirlpool", $_POST['passwd']);
	$users[] = $new_user;
	file_put_contents('../private/passwd', serialize($users));
	echo "OK\n";

}
else
	echo "ERROR\n";
?>