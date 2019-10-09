<?php
	function ft_split($str)
	{
		$arr = preg_split("/ +/", trim($str));
		return ($arr);
	}
?>
