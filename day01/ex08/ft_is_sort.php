<?php
function ft_is_sort($arr_unsort)
{
	$len = count($arr_unsort);
	$arr_sort = $arr_unsort;
	sort($arr_sort);
	while($i < $len)
	{
		if (strcmp($arr_sort[$i], $arr_unsort[$i]))
			return(0);
		$i++;
	}
	return(1);
}
?>
