<?php

require '../app/utils.php';
/*
  Problem 3 https://projecteuler.net/problem=3
  The prime factors of 13195 are 5, 7, 13 and 29.
  What is the largest prime factor of the number 600851475143 ?
 */

$max = 600851475143;
$sqrt_max = intval(sqrt($max));

for ($i = $sqrt_max; $i > 1; $i--) {

    if (fmod($max, $i) == 0 && 2 == gmp_prob_prime($i)) {
        echo $i;
        break;
    }
}

require '../app/running_time.php';
