<?php
session_start();
if ($_SESSION["auth_user"])
	$_SESSION["auth_user"] = "";
else
	echo "ERROR";
 ?>
