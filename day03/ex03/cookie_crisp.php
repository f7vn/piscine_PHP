<?php
// Ставим куки -> В name значение Value
if ($_GET["action"] == "set")
	setcookie($_GET["name"], $_GET["value"], time()+3600);
// Читаем куки
else if ($_GET["action"] == "get")
{
	if ($_COOKIE[$_GET["name"]])
		echo $_COOKIE[$_GET["name"]]."\n";
}
// Чистим куки
else if ($_GET["action"] == "del")
	setcookie($_GET["name"], NULL, time() -3600);
?>
