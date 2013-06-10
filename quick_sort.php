<?php
/**
 * Sort array using quick sort algorithm
 * algorithm : http://en.wikipedia.org/wiki/Quicksort 
 */

function quick_sort($array) {
	$count = count($array);
	if ($count <= 1) return $array;

	$key = $array[0];
	$leftArray = array();
	$rightArray = array();

	for ($i=1; $i<$count; $i++) { //omit first  item
		if ($array[$i] <= $key) {
			$leftArray[] = $array[$i];
		} else {
			$rightArray[] = $array[$i];
		}
	}
	$leftArray = quick_sort($leftArray);
	$rightArray = quick_sort($rightArray);
	return array_merge($leftArray, array($key), $rightArray);
}

$array = array(7,5,2,1,4,8,6);
print_r( quick_sort($array) );
