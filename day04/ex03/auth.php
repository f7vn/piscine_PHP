<?php
function auth($login, $passwd)
{
	if (!$login || !$passwd)
		return false;
	$us_acc = unserialize(file_get_contents("../private/passwd"));
	if (!$us_acc)
		return false;
	foreach ($us_acc as $key => $value)
	{
		if ($value["login"] === $login && $value["passwd"] === hash("whirlpool", $passwd))
			return true;
	}
	return false;

}
?>
