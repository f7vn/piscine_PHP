#!/usr/bin/php
<?php
while (1)
{
if ($a = feof(STDIN))
	exit();
echo "Enter a number: ";
$a = trim(fgets(STDIN));
if (!is_numeric($a) && $a)
	echo $a . " is not a number\n";
elseif (!($a % 2) && $a)
	$b = "is even\n";
elseif ($a)
	$b = "is odd\n";
else
	$b = "\n";
echo $b;
$a = null;
$b = null;
}
?>
