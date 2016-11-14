<?php
require '../app/utils.php';
/*
  You are given the following information, but you may prefer to do some research for yourself.

  1 Jan 1900 was a Monday.
  Thirty days has September,
  April, June and November.
  All the rest have thirty-one,
  Saving February alone,
  Which has twenty-eight, rain or shine.
  And on leap years, twenty-nine.
  A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.
  How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
 */

$begin = new DateTime('1901-01-01');
$end = new DateTime('2000-12-31');
$end = $end->modify('+1 day');

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval, $end);
$sunday = 0;
foreach ($daterange as $date) {
    if ($date->format("l") == 'Sunday' && $date->format("d") == 01) {
        $sunday++;
    }
}
echo $sunday;


require '../app/running_time.php';
