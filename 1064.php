<?php

$numbers           = [];
$_positive_numbers = [];
$_positive_count   = 0;

for ($i = 0; $i <= 5; $i++) {
    $numbers[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        array_push($_positive_numbers, $numbers[$i]);
        $_positive_count++;
    }
}

echo $_positive_count . " valores positivos" . PHP_EOL;
$sum_of_avg_numbers = array_reduce($_positive_numbers, fn($carry, $item) => ($carry + $item));
$avg                = ($sum_of_avg_numbers / count($_positive_numbers));
echo number_format($avg, 1, ".", "") . PHP_EOL;
