<?php
/**
 * Sort array using bubble sort algorithm
 * algorithm : http://en.wikipedia.org/wiki/Bubble_sort
 */

function bubble_sort($array) {
	$count = count($array);
	for ($i=0; $i<$count-1; $i++) {
		for ($j=0; $j<$count-1-$i; $j++) {
			if ($array[$j+1] < $array[$j]) {
				$temp = $array[$j+1];
				$array[$j+1] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}
	return $array;
}

$array = array(7,5,2,1,4,8,6);
print_r( bubble_sort($array) );
