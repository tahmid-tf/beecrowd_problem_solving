<?php

$_number_of_inputs = intval(trim(fgets(STDIN)));
$_input            = [];

for ($i = 0; $i < $_number_of_inputs; $i++) {
    $_input_data   = fgets(STDIN);
    $exploded_data = explode(' ', $_input_data);
    array_push($_input, $exploded_data);
}

for ($i = 0; $i < $_number_of_inputs; $i++) {
    $weight_avg_calculation = ($_input[$i][0] * 2 + $_input[$i][1] * 3 + $_input[$i][2] * 5) / 10;
    echo number_format($weight_avg_calculation, 1, '.', '') . PHP_EOL;
}
