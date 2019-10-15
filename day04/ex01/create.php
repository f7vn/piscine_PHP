<?php
if (!$_POST["login"] === "" || $_POST["passwd"] === "" || $_POST["submit"] !== "OK")
{
	echo "ERROR";
	return 0;
}
//echo $_POST["login"] . $_POST["passwd"] ;

if (!(file_exists("../private")) && !(file_exists("../private/passwd")))
	mkdir ("../private");


if (file_exists("../private/passwd"))
{
	$arr2 = unserialize(file_get_contents("../private/passwd"));
	foreach ($arr2 as $mass)
	{
		if ($mass["login"] === $_POST["login"])
		{
			echo "ERROR\n";
			return 0;
		}
	}
}

$arr["login"] = $_POST["login"];

$arr["passwd"] = hash("whirlpool", $_POST["passwd"]);
$arr2[] = $arr;
file_put_contents("../private/passwd", serialize($arr2));

echo "OK\n";
?>
