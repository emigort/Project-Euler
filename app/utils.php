<?php
ini_set('memory_limit', '512M');
$start = microtime(true);
/*
  Utilities functions to solve the problems
 */

/*
 * @var string End Of Line
 */
$EOL = isCommandLineInterface() ? "\n" : "<br>";

define('EOL', $EOL);

function isCommandLineInterface()
{
    return (php_sapi_name() === 'cli');
}

function print_array($array)
{
    echo!isCommandLineInterface() ? '<pre>' : '';
    print_r($array);
    echo!isCommandLineInterface() ? '</pre>' : '';
}

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
