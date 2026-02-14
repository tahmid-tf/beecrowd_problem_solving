<?php

$_limit = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $_limit; $i++) {
    $_input        = intval(trim(fgets(STDIN)));
    $_array_values = [];

    for ($j = 1; $j <= $_input; $j++) {
        if ($_input % $j == 0) {
            array_push($_array_values, $_input);
        }
    }

    if (count($_array_values) > 2) {
        echo "$_input nao eh primo\n";

    } else {
        echo "$_input eh primo\n";
    }
}
