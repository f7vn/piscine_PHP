<?php
session_start();
if ($_GET["submit"] == "OK")
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];


	//echo $_SESSION["passwd"] . $_SESSION["login"] ;
}
?>
<html><body>
<form action="index.php" method="get">
 Username: <input type="text" name="login" value="<?php  echo $_SESSION["login"]; ?>" />
 <br />
 Password: <input type="text" name="passwd" value="<?php  echo $_SESSION["passwd"]; ?>" />
 <input type="submit" name="Submit" value="OK"/>
</form>
</body></html>
