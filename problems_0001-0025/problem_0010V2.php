<?php

require '../app/utils.php';

$limit = 2000000;
$sieve_bound = round(($limit - 1) / 2);
$sieve = array_fill(1, $sieve_bound, 0);
$cross_limit = round((sqrt($limit) - 1) / 2);
$sum = 2;
for ($i = 1; $i <= $cross_limit; $i++) {
    // 2*i+1 is prime, mark multiples
    if (!$sieve[$i]) {
        for ($j = 2 * $i * ($i + 1); $j <= $sieve_bound; $j += (2 * $i) + 1) {
            $sieve[$j] = 1;
        }
    }
}


for ($i = 1; $i <= $sieve_bound; $i++) {
    if (!$sieve[$i]) {
        $sum = $sum + (2 * $i + 1);
    }
}
echo $sum;




require '../app/running_time.php';
