<?php

$numbers         = [];
$_positive_count = 0;

for ($i = 0; $i <= 5; $i++) {
    $numbers[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $_positive_count++;
    }
}

echo $_positive_count . " valores positivos" . PHP_EOL;
