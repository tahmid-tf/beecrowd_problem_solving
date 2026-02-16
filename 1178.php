<?php

$input          = floatval(trim(fgets(STDIN)));
$value          = $input;
$_array_data    = [];
$_array_data[0] = $input;

for ($i = 1; $i < 100; $i++) {
    $value /= 2;
    array_push($_array_data, $value);
}

for ($i = 0; $i < count($_array_data); $i++) {
    echo "N[$i] = " . number_format($_array_data[$i], 4, '.', '') . "" . "\n";
}
