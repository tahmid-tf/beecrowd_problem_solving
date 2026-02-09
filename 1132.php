<?php

$a = intval(trim(fgets(STDIN)));
$b = intval(trim(fgets(STDIN)));

$start = min($a, $b);
$end   = max($a, $b);

$sum = 0;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 13 != 0) {
        $sum += $i;
    }
}

echo $sum . PHP_EOL;
