<h1><a href='https://projecteuler.net/problem=1'>Problem 1</a></h1>
<p>
    If we list all the natural numbers below 10 that are multiples of 3 or 5,
    we get 3, 5, 6 and 9. The sum of these multiples is 23.<br>
    Find the sum of all the multiples of 3 or 5 below 1000.
</p>
<hr>
<?php
$code = '<?php 
$max = 999;

$result = (sumDivisible($max, 3) + sumDivisible($max, 5)) - sumDivisible($max, 15);

echo $result;

function sumDivisible($max, $div)
{
    $div_count = intval($max / $div);
    return $div * (($div_count * ($div_count + 1)) / 2);
}';

highlight_string($code);
echo '<hr>';
require '/app/utils.php';
//div_count*((N(N + 1))/2)
$max = 999;

$result = (sumDivisible($max, 3) + sumDivisible($max, 5)) - sumDivisible($max, 15);

echo '<div class="answer">Answer: ' . $result . '</div>';

function sumDivisible($max, $div)
{
    $div_count = intval($max / $div);
    return $div * (($div_count * ($div_count + 1)) / 2);
}
require 'app/running_time.php';
