<?php

$_operation = trim(fgets(STDIN));

$M              = [];
$_row_data_push = [];
$_index         = 11;

for ($i = 0; $i < 12; $i++) {
    $_temp_array = [];
    for ($j = 0; $j < 12; $j++) {
        $_temp_array[$j] = floatval(trim(fgets(STDIN)));
    }
    $M[$i] = $_temp_array;
}

for ($i = 1; $i <= 11; $i++) {
    $new_array = array_slice($M[$i], $_index, 11);
    $_index--;
    foreach ($new_array as $key => $value) {
        $_row_data_push[] = $value;
    }
}

$_array_sum = array_sum($_row_data_push);

if ($_operation == 'S') {
    printf("%.1f\n", $_array_sum);
} else {
    $_average = $_array_sum / count($_row_data_push);
    printf("%.1f\n", $_average);
}
