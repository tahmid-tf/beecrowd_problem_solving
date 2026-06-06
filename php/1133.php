<?php

$_array_values = [];

$_input_1 = intval(trim(fgets(STDIN)));
$_input_2 = intval(trim(fgets(STDIN)));

$_min_value = min($_input_1, $_input_2);
$_max_value = max($_input_1, $_input_2);

for ($i = $_min_value + 1; $i <= $_max_value - 1; $i++) {
    if (round($i % 5) == 2 || round($i % 5) == 3) {
        $_array_values[] = $i;
    }
}

foreach ($_array_values as $_key => $_value) {
    echo $_value . "\n";
}
