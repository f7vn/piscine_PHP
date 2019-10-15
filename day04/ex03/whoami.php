<?php
session_start();
if ($_SESSION["auth_user"])
	echo $_SESSION["auth_user"] . "\n";
else
	echo "ERROR";
 ?>
