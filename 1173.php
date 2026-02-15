<?php

$_array        = [];
$_first_number = intval(trim(fgets(STDIN)));
$_data         = $_first_number;

if ($_first_number > 50) {
    return;
}

$_array[0] = $_first_number;

for ($i = 0; $i < 10; $i++) {
    $_data *= 2;
    array_push($_array, $_data);
}

for ($i = 0; $i < count($_array) - 1; $i++) {
    echo "N[$i] = " . $_array[$i] . "\n";
}
