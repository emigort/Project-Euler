<?php

require '/app/utils.php';
/*
  Problem 16 https://projecteuler.net/problem=16
  2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.

  What is the sum of the digits of the number 2^1000?
 */

$y = pow(2, 1000);
$x = sprintf('%f', $y);
echo array_sum(str_split(str_replace('.', '', $x)));

require 'app/running_time.php';
