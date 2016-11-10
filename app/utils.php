<?php
ini_set('memory_limit','512M');
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
    echo !isCommandLineInterface() ? '<pre>' : '';
    print_r($array);
    echo !isCommandLineInterface() ? '</pre>' : '';
}
