<?php

$_limit         = intval(trim(fgets(STDIN)));
$_array_outputs = [];

for ($j = 0; $j < $_limit; $j++) {

    $array = [0, 1];

    $_input_value = intval(trim(fgets(STDIN)));

    if ($_input_value == 0) {
        array_push($_array_outputs, [$_input_value, 0]);
        continue;
    }

    if ($_input_value == 1) {
        array_push($_array_outputs, [$_input_value, 1]);
        continue;
    }

    for ($i = 1; $i < $_input_value; $i++) {
        $_new_number = $array[$i] + $array[$i - 1];
        array_push($array, $_new_number);
    }

    array_push($_array_outputs, [$_input_value, end($array)]);
}

foreach ($_array_outputs as $value) {
    echo "Fib($value[0]) = " . $value[1] . "\n";
}
