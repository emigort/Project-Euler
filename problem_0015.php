<?php
require '/app/utils.php';
/*
  Problem 15 https://projecteuler.net/problem=15
  Starting in the top left corner of a 2×2 grid, and only being able to move to
  the right and down, there are exactly 6 routes to the bottom right corner.

  How many such routes are there through a 20×20 grid?
  (2n)!/(n!)^2
 */

$gridSize = 20;
$path = gmp_strval((gmp_fact(2 * $gridSize))) / pow(gmp_strval(gmp_fact($gridSize)), 2);
echo sprintf('%f', $path);

require 'app/running_time.php';
