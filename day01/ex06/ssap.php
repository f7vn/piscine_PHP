#!/usr/bin/php
<?php
$arr = array();
function ft_split($str)
{
	$arr = preg_split("/ +/", trim($str));
	return ($arr);
}

foreach($argv as $key)
	if ($i++)
	{
		$temp = ft_split($key);
		$arr = array_merge($arr, $temp);
	}

sort($arr);

foreach($arr as $prt)
	echo $prt . "\n";
?>
