<?php

$_input          = trim(fgets(STDIN));
$_data_array     = array_map('intval', explode(" ", $_input));
$_new_data_array = [];
$_sum            = 0;

$A = $_data_array[0];
$N = 0;

for ($i = 1; $i < count($_data_array); $i++) {
    if ($_data_array[$i] > 0) {
        $N = $_data_array[$i];
        break;
    }
}

for ($i = 0; $i < $N; $i++) {
    $_sum += $A + $i;
}

echo $_sum . "\n";
