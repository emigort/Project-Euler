<?php
require '/app/utils.php';

$gridSize = 20;
$paths = 1;

for ($i = 0; $i < $gridSize; $i++) {
    $paths *= (2 * $gridSize) - $i;
    $paths /= $i + 1;
}
echo sprintf('%f', $paths);

require 'app/running_time.php';
