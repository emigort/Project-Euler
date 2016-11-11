<?php
require '/app/utils.php';
//104743
$limit = 100001;
$count = 1; //we know that 2 is prime
$candidate = 1;
while ($count <= $limit) {
    $candidate = $candidate + 2;
    if (isPrime($candidate)) {
        $count++;
    }
}
echo $candidate;

function isPrime($n)
{
    if ($n == 1) {
        return false;
    } else if ($n < 4) {
        return true; //2 and 3 are prime
    } else if ($n % 2 == 0) {
        return false;
    } else if ($n < 9) {
        return true; //we have already excluded 4,6 and 8.
    } else if ($n % 3 == 0) {
        return false;
    } else {
        $r = round(sqrt($n)); // n rounded to the greatest integer r so that r*r<=n
        $f = 5;
        while ($f <= $r) {
            if ($n % $f == 0) {
                return false;
            }
            if (($n % ($f + 2)) == 0) {
                return false;
            }
            $f = $f + 6;
        }
        return true;
    }
}
require 'app/running_time.php';
