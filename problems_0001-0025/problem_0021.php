<?php

require '../app/utils.php';
/*
  Problem 21 https://projecteuler.net/problem=21
  Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
  If d(a) = b and d(b) = a, where a ≠ b, then a and b are an amicable pair and each of a and b are called amicable numbers.

  For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.

  Evaluate the sum of all the amicable numbers under 10000.
 */

$sum = 0;
for ($a = 2; $a < 10000; $a++) {
    $b = SumOfProperDivisors($a);

    if ($b > $a) {
        if (SumOfProperDivisors($b) == $a) {
            $sum = $sum + $a + $b;
            echo "($a,$b) " . EOL;
        }
    }
}

echo $sum;

function SumOfProperDivisors($n)
{
    return SumOfDivisors($n) - $n;
}

function SumOfDivisors($n)
{
    $sum = 1;
    $p = 2;
    while (($p * $p) <= $n && $n > 1) {
        if ($n % $p == 0) {
            $j = $p * $p;
            $n = $n / $p;
            while ($n % $p == 0) {
                $j = $j * $p;
                $n = $n / $p;
            }
            $sum = $sum * ($j - 1);
            $sum = $sum / ($p - 1);
        }
        if ($p == 2) {
            $p = 3;
        } else {
            $p = $p + 2;
        }
    }
    if ($n > 1) {
        $sum = $sum * ($n + 1);
    }

    return $sum;
}

require '../app/running_time.php';
