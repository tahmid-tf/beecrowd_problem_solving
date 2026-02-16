<?php

$_input = intval(trim(fgets(STDIN)));
$value  = 0;
$_limit = $_input;

for ($i = 0; $i < 1000; $i++) {
    if ($value == $_limit) {
        $value = 0;
    }

    echo "N[$i] = $value\n";
    $value++;
}
