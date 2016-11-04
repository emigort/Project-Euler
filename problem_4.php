<?php

require '/app/utils.php';
/*
  Problem 4 https://projecteuler.net/problem=4

  Largest palindrome product

  A palindromic number reads the same both ways. The largest palindrome made
  from the product of two 2-digit numbers is 9009 = 91 × 99.
  Find the largest palindrome made from the product of two 3-digit numbers.
 */


$n=range(900,999);
$result = 0;
for ($i = 999; $i >= 900; $i--) {
    foreach ($n as $value) {
        $palindromic = $i * $value;
        $palindromic_string = (string) $palindromic;
        if ($palindromic_string == strrev($palindromic_string)) {
            $result= $palindromic;
            break;
        }
    }
    if ($result)
        break;
}
echo $result;


require 'app/running_time.php';
