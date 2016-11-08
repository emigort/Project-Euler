<?php
require '/app/utils.php';

/*
  Problem 7 https://projecteuler.net/problem=7
  By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

  What is the 10 001st prime number?
 */

$arr = [];
$a = 1;
for ($i = 1; $i <= 1000000000000; $i++) {
    if (gmp_prob_prime($i) == 2) {
        $arr[$a] = $i;
        $a++;
        if ($a > 10001)
            break;
    }
}

echo $arr[10001];

require 'app/running_time.php';
