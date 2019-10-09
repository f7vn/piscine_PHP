#!/usr/bin/php
<?php
if ($argc != 2)
{
		echo "Incorrect Parameters\n";
		exit();
}
$znak;
$num1;
$num2;
$tmp = preg_split("/ +/", trim($argv[1]));
trim($tmp[1]);

if (count($tmp) == 1)
{
	$tmp2 = preg_split("/[\+, \-, \*, \%, \/]/", trim($argv[1]));
	if (count($tmp2) != 2)
	{
		echo "Syntax Error\n";
		exit();
	}
	if (stripos($argv[1], "+"))
		$znak = "+";
	if (stripos($argv[1], "-"))
		$znak = "-";
	if (stripos($argv[1], "*"))
		$znak = "*";
	if (stripos($argv[1], "/"))
		$znak = "/";
	if (stripos($argv[1], "%"))
		$znak = "%";


	if (!is_numeric($tmp2[0]) || !is_numeric($tmp2[1]))
	{
			echo "Syntax Error\n";
			exit();
	}
	if (!$tmp2[1] && ($znak == "/" || $znak == "%"))
	{
			echo "Divided by zero\n";
			exit();
	}
	switch ($znak)
	{
		case '+':
			echo trim($tmp2[0]) + trim($tmp2[1]);
			break;
		case '*':
			echo trim($tmp2[0]) * trim($tmp2[1]);
			break;
		case '/':
			echo trim($tmp2[0]) / trim($tmp2[1]);
			break;
		case '-':
			echo trim($tmp2[0]) - trim($tmp2[1]);
			break;
		case '%':
			echo trim($tmp2[0]) % trim($tmp2[1]);
			break;
		default :
			echo "Syntax Error";
	}
	echo "\n";
	exit();
}

if (count($tmp) != 3)
{
		echo "Syntax Error\n";
		exit();
}

if (!is_numeric($tmp[0]) || !is_numeric($tmp[2]))
{
		echo "Syntax Error\n";
		exit();
}

if (strlen($tmp[1]) != 1)
{
		echo "Syntax Error\n";
		exit();
}

if (!$tmp[2] && ($tmp[1] == "/" || $tmp[1] == "%"))
{
		echo "Divided by zero\n";
		exit();
}

switch ($tmp[1])
{
	case '+':
		echo trim($tmp[0]) + trim($tmp[2]);
		break;
	case '*':
		echo trim($tmp[0]) * trim($tmp[2]);
		break;
	case '/':
		echo trim($tmp[0]) / trim($tmp[2]);
		break;
	case '-':
		echo trim($tmp[0]) - trim($tmp[2]);
		break;
	case '%':
		echo trim($tmp[0]) % trim($tmp[2]);
		break;
	default :
		echo "Syntax Error";
}
echo "\n";
?>
