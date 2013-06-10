<?php
/**
 * Find target value in a sorted array using Binary Search
 * Algorithm: http://en.wikipedia.org/wiki/Binary_search_algorithm
 */

function binary_search($array, $value) {
	$start = 0;
	$end = count($array) - 1;
	while ($start <= $end) {
		$mid = intval(($start + $end)/2);
		if ($array[$mid] == $value) {
			return $mid;
		} elseif ($array[$mid] > $value) {
			$end = $mid - 1;
		} else {
			$start = $mid + 1;
		}
	}
	return -1;
}

$array = range(0,10);
print "index of {$value} is :" .binary_search($array,3);

