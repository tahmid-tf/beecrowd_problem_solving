<?php

$array = [];

for ($i = 0; $i < 100; $i++) {
    $input = floatval(trim(fgets(STDIN)));
    array_push($array, $input);
}

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] <= 10) {
        echo "A[$i] = " . number_format($array[$i], 1, '.','') . "\n";
    }
}
