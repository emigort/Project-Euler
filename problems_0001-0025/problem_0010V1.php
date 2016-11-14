<?php
require '../app/utils.php';

/*
  Problem 10 https://projecteuler.net/problem=10
  The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 
  Find the sum of all the primes below two million.
 * 
 * Improvement of memory consumption, might be slower at first but it is best for large numbers
 */

$sum = 0;

for ($i = 0; $i < 2000000; $i = gmp_strval(gmp_nextprime($i))) {
    $sum +=$i;
}

echo $sum;

require '../app/running_time.php';
