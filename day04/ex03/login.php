<?php
include("auth.php");

session_start();

$_SESSION["login"] = $_GET["login"];
$_SESSION["passwd"] = $_GET["passwd"];

if ($_SESSION["login"] && $_SESSION["passwd"] && auth($_SESSION["login"], $_SESSION["passwd"]))
	{
		$_SESSION["auth_user"] = $_SESSION["login"];
		echo "OK";
	}
else
	{
		$_SESSION["auth_user"] = "";
		echo "ERROR";
	}
 ?>
