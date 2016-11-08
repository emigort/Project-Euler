<?php
require '/app/utils.php';
/*
  Problem 5 https://projecteuler.net/problem=5

  2520 is the smallest number that can be divided by each of the numbers
  from 1 to 10 without any remainder.
  What is the smallest positive number that is evenly divisible by all of the
  numbers from 1 to 20?
 */

function gcd($a, $b) {
	if ($a < $b)
		gcd($b, $a);

	if($a % $b == 0)
		return $b;

	return gcd($b, $a%$b);
}

function lcm($a, $b) {
	return $a * $b / gcd($a, $b);
}


function solution($n) {
	 $ret = 1;
	for($i=1; $i<=$n; $i++)
		$ret = lcm($ret, $i);
		
	return $ret;
}

echo solution(20);

require 'app/running_time.php';
