<?php

if ($_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["submit"] !== "OK" || $_POST["newpw"] === "" || !(file_exists("../private")) || !(file_exists("../private/passwd")))
{
	echo "ERROR";
	return 0;
}

$login = $_POST["login"];

$oldpw = hash("whirlpool", $_POST["oldpw"]);
$newpw = hash("whirlpool", $_POST["newpw"]);

$pswd_array = unserialize(file_get_contents("../private/passwd"));

foreach ($pswd_array as &$user)
{
	if ($user["login"] === $login && $user["passwd"] === $oldpw && ($oldpw !== $newpw))
	{
		$user["passwd"] = $newpw;
		file_put_contents("../private/passwd", serialize($pswd_array));
		echo "OK\n";
		return 0;
	}
}

echo "ERROR";
return 0;
 ?>
