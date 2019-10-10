#!/usr/bin/php
<?php
function hallo_ho($file)
{
	$arr = strtoupper($file[0]);
    return $arr;
}

function hallo_ho2($file)
{
	$arr = strtolower($file[0]);
    return $arr;
}

if ($argc > 1)
{
  $file = file_get_contents("$argv[1]");
  $file = preg_replace_callback('/<a .+?<\/a>/si', "hallo_ho", $file);
  $file = preg_replace_callback('/<.+?>/si', "hallo_ho2", $file);
  $file = preg_replace_callback('/(?<=title=["\'])[^"^\']+/si', "hallo_ho", $file);
  print($file);
}
?>
