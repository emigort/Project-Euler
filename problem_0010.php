<?php
require '/app/utils.php';
/*
  Problem 10 https://projecteuler.net/problem=10
  The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
  142913828922
  Find the sum of all the primes below two million.
 */
$n = 2000000;
$limit = intval(sqrt($n));
$A = array_fill(0, $n, true);


for ($i = 2; $i <= $limit; $i++) {
    if ($A[$i - 1]) {
        for ($j = $i * $i; $j <= $n; $j += $i) {
            $A[$j - 1] = false;
        }
    }
}
$result = array();
foreach ($A as $i => $is_prime) {
    if ($is_prime) {
        $result[] = $i + 1;
    }
}


print_array(array_sum($result)-1);


require 'app/running_time.php';
