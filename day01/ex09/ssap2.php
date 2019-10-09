#!/usr/bin/php
<?php
function rule($a, $b)
{
	$i = 0;
	$line = "abcdefghijklmnopqrstuvwxyz0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		if (stripos($line, $a[$i]) > stripos($line, $b[$i]))
			return (1);
		else if (stripos($line, $a[$i]) < stripos($line, $b[$i]))
			return (-1);
		else
			$i++;
	}
}
$real_arr = array();
foreach ($argv as $mass)
{
	if ($arg++)
	{
		$tmp = preg_split("/ +/", trim($mass));
		$real_arr = array_merge($real_arr, $tmp);
	}
}
usort($real_arr, "rule");
foreach($real_arr as $prt)
		echo $prt . "\n";
?>
