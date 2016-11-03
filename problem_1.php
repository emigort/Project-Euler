<?php
require '/app/utils.php';
/*
  Problem 1 https://projecteuler.net/problem=1
  If we list all the natural numbers below 10 that are multiples of 3 or 5,
  we get 3, 5, 6 and 9. The sum of these multiples is 23.
  Find the sum of all the multiples of 3 or 5 below 1000.
 */

//div_count*((N(N + 1))/2)
$max = 999;

$result = (sumDivisible($max, 3) + sumDivisible($max, 5)) - sumDivisible($max, 15);

echo $result;

function sumDivisible($max, $div)
{
    $div_count = intval($max / $div);
    return $div * ($div_count * ($div_count + 1)) / 2;
}



require 'app/running_time.php';
