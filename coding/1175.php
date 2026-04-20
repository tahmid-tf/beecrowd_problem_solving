<?php

$array = [];

for ($i = 0; $i < 20; $i++) {
    $input = floatval(trim(fgets(STDIN)));
    array_push($array, $input);
}

$reverse_array = array_reverse($array);

for ($i = 0; $i < count($reverse_array); $i++) {
    echo "N[$i] = " . $reverse_array[$i] . "\n";
}
