<?php
require '/app/utils.php';
//104743
$limit = 10000; //we already have 2 in the list
$count = 1; //we know that 2 is prime
$candidate = 1;
while ($count <= $limit) {
    $candidate = $candidate + 2;
    if (isPrime($candidate)) {
//        echo " $candidate ";
        $count++;
    }
}
echo $candidate;

require 'app/running_time.php';
