#!/usr/bin/php
<?php

if ($argc < 3)
	exit();

$find = $argv[1];
$real_arr = array();
$argv = array_reverse($argv);
foreach ($argv as $mass)
{
	if ($arg++ < count($argv) - 2)
	{
		$tmp = preg_split("/:/", trim($mass));
		if ($find == $tmp[0])
		 	{echo $tmp[1] . "\n";
				exit();
			}
	}
}
 ?>
