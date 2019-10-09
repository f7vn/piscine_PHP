#!/usr/bin/php
<?php
include("ft_split.php");
$str = ft_split($argv[1]);
$n = count($str);
$i = 0;
while ($n--)
{
	echo $str[$i++];
	echo $n ? " " : "\n";
}
?>
