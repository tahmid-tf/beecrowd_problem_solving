<?php

$_array = [];

for ($i = 1; $i <= 10; $i++) {
    $_input = intval(trim(fgets(STDIN)));
    array_push($_array, $_input);
}

$_mapped_array = array_map(function ($item) {
    return ($item <= 0) ? 1 : $item;
}, $_array);

for ($i = 0; $i < count($_mapped_array); $i++) {
    echo "X[$i] = " . $_mapped_array[$i] . "\n";
}
