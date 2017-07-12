<?php
/**
 * 快速排序
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
		if ($k == 0) {
			continue;		//参考值不参与排序
		}
		if ($v < $target) {
			$pre_array[] = $v;		//比参考值小的放在左边
		} else {
			$next_array[] = $v;		//比参考值大的放在右边
		}
	}
	$pre_array = quicksort($pre_array);
	$next_array = quicksort($next_array);
	return array_merge($pre_array, [$target], $next_array);
}
// test
$arr = [1,7,300,30,75,48, 301, 50, 66];
$new_arr = quicksort($arr);
echo '<pre>';
var_dump($new_arr);
echo '</pre>';
?>
