<?php

$_operation = trim(fgets(STDIN));

$M           = [];
$_data_array = [];
$_limit      = 11;
$start       = 0;

for ($i = 0; $i < 12; $i++) {
    $_temp_array = [];
    for ($j = 0; $j < 12; $j++) {
        $_temp_array[$j] = floatval(trim(fgets(STDIN)));
    }
    $M[$i] = $_temp_array;
}

for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j <= $i - 1; $j++) {
        $_data_array[] = $M[$i][$j];
    }
}

for ($i = 10; $i >= 6; $i--) {
    for ($j = 0; $j <= $start; $j++) {
        $_data_array[] = $M[$i][$j];
    }
    $start++;
}

$_array_sum = array_sum($_data_array);

if ($_operation == 'S') {
    printf("%.1f\n", $_array_sum);
} else {
    $_average = $_array_sum / count($_data_array);
    printf("%.1f\n", $_average);
}
