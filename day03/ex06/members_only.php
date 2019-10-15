<?php
$u_login = "zaz";
$u_psswd = "Ilovemylittleponey";

if (($_SERVER['PHP_AUTH_USER'] == $u_login) && ($_SERVER['PHP_AUTH_PW'] == $u_psswd))
	{echo "<html><body>\nHello Zaz<br />\n<img src='../img/42.png';base64,".base64_encode(file_get_contents('../img/42.png'))."'>\n</body></html>\n";
	}
else
{
	header("WWW-Authenticate: Basic realm=''Member area''");
	header("Content-Type: text/html");
	echo "<html><body>That area is accessible for members only</body></html>\n";
}
 ?>
