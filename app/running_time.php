<?php
$time_elapsed_secs = microtime(true) - $start;
echo $time_elapsed_secs * 1000 >= 1000 ?
        EOL . EOL . number_format($time_elapsed_secs, 4, '.', ',') . ' seconds!!!'.EOL :
        EOL . EOL . number_format($time_elapsed_secs * 1000, 2, '.', ',') . ' miliseconds!!!'.EOL;


echo 'Memory usage '.  number_format(((memory_get_peak_usage(1)/1024)/1024),2,'.',',').' MB';
