<?php
require '/app/utils.php';


$n = 3; //start with a prime 
$Dn = 2; //number of divisors for any prime
$cnt = 0; //to insure the while loop is entered 

$n1 = 0;
$Dn1 = 0;
$i = 0;
$exponent = 0;
$primearray = [2];
$limit = 65500;
$count = 1; //we know that 2 is prime
$candidate = 1;

//Generating prime array until 65,500
while ($candidate <= $limit) {
    $candidate = $candidate + 2;
    if (isPrime($candidate)) {
        $primearray[] = $candidate;
    }
}



while ($cnt <= 500) {
    $n = $n + 1;
    $n1 = $n;
    if ($n1 % 2 == 0) {
        $n1 = $n1 / 2;
    }
    $Dn1 = 1;
    for ($i = 0; $i < $limit; $i++) {
        if ($primearray[$i] * $primearray[$i] > $n1) {
            $Dn1 = 2 * $Dn1;
            break;
            //When the prime divisor would be greater than the residual n1,
            //that residual n1 is the last prime factor with an exponent=1
            //No necessity to identify it. 
        }
        $exponent = 1;
        while ($n1 % $primearray[$i] == 0) {
            $exponent++;
            $n1 = $n1 / $primearray[$i];
        }
        if ($exponent > 1) {
            $Dn1 = $Dn1 * $exponent;
        }
        if ($n1 == 1) {
            break;
        }
    }
    $cnt = $Dn * $Dn1;
    $Dn = $Dn1;
}
echo $n * (($n - 1) / 2);

require 'app/running_time.php';
