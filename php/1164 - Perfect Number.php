<?php

$_limit = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $_limit; $i++) {
    $_input      = intval(trim(fgets(STDIN)));
    $_array_data = [];

    for ($j = 1; $j < $_input; $j++) {
        if ($_input % $j == 0) {
            array_push($_array_data, $j);
        }
    }

    if (array_sum($_array_data) == $_input) {
        echo $_input . " eh perfeito\n";
    } else {
        echo $_input . " nao eh perfeito\n";
    }

}
