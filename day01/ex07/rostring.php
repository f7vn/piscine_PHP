#!/usr/bin/php
<?php
function ft_split($str)
{
	$arr = preg_split("/ +/", trim($str));
	return ($arr);
}

if ($argc == 1)
	exit();

$arr = ft_split($argv[1]);
$line = count($arr);

foreach ($arr as $key)
{
	if ($i++)
		echo $key . " ";
}
echo $arr[0] . "\n";
?>
