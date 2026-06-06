<?php

$_line      = intval(trim(fgets(STDIN)));
$_operation = trim(fgets(STDIN));

$M              = [];
$_row_data_push = [];

for ($i = 0; $i < 12; $i++) {
    $_temp_array = [];
    for ($j = 0; $j < 12; $j++) {
        $_temp_array[$j] = floatval(trim(fgets(STDIN)));
    }
    $M[$i] = $_temp_array;
}

for ($i = 0; $i < 12; $i++) {
    array_push($_row_data_push, $M[$i][$_line]);
}

$_array_sum = array_sum($_row_data_push);

if ($_operation == 'S') {
    printf("%.1f\n", $_array_sum);
} else {
    $_average = $_array_sum / 12.0;
    printf("%.1f\n", $_average);
}
