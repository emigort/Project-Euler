<?php
require '/app/utils.php';
/*
  Problem 9 https://projecteuler.net/problem=9
  A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

  a^2 + b^2 = c^2
  For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.

  There exists exactly one Pythagorean triplet for which a + b + c = 1000.
  Find the product abc.
 */

//$a should be max 1000/3=333 and $b max should be 1000/2=500
$m = 1000;
for ($a = 1; $a <= 333; $a++) {
    for ($b = $a; $b <= 500; $b++) {
        $c = $m - $a - $b;
        if ($a * $a + $b * $b == $c * $c) {
            echo ($a * $b * $c) . EOL;
            echo '(a = ' . $a . ', b = ' . $b . ', c = ' . $c . ')';
            break;
        }
    }
}


require 'app/running_time.php';
