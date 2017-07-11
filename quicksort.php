<?php
/**
 * 
 */
function quicksort($array)
{
	if (count($array) < 2) {
		return $array;
	}
	$target = $array[0];
	$pre_array = [];
	$next_array = [];
	foreach ($array as $k => $v) {
		if ($v == $target) {
			continue;
		}
		if ($v < $target) {
			$pre_array[] = $v;
		} else {
			$next_array[] = $v;
		}
	}
	$pre_array = quicksort($pre_array);
	$next_array = quicksort($next_array);
	return array_merge($pre_array, [$target], $next_array);
}
?>
