<?php
require '/app/utils.php';

/*
  Problem 14 https://projecteuler.net/problem=14
  he following iterative sequence is defined for the set of positive integers:

  n → n/2 (n is even)
  n → 3n + 1 (n is odd)

  Using the rule above and starting with 13, we generate the following sequence:

  13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1
  It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been proved yet (Collatz Problem),
  it is thought that all starting numbers finish at 1.

  Which starting number, under one million, produces the longest chain?

  NOTE: Once the chain starts the terms are allowed to go above one million.
 */

function collatzSteps($start = 13)
{
    $a = 0;
    while ($start > 1) {
        if ($start % 2 == 0) {
            $start = $start / 2;
        } else {
            $start = (3 * $start) + 1;
        }
        $a++;
    }
    return $a;
}
$y = ['step' => 0, 'number' => 1];

for ($i = 999999; $i >= 500000; $i-=2) {
    $x = collatzSteps($i);
    if ($x > $y['step']) {
        $y['step'] = $x;
        $y['number'] = $i;
    }
}


print_array($y);



require 'app/running_time.php';
