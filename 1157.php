<?php

$_input = intval(trim(fgets(STDIN)));

$_array_data = [];

for ($i = 1; $i <= $_input; $i++) {
    if ($_input % $i == 0) {
        $_array_data[] = $i;
    }
}

foreach ($_array_data as $key => $value) {
    echo $value . PHP_EOL;
}