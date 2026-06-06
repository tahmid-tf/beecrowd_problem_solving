<?php

$input_limit = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $input_limit; $i++) {
    $_input               = trim(fgets(STDIN));
    $_exploded_input_data = explode(' ', $_input);

    $_input_1 = $_exploded_input_data[0];
    $_input_2 = $_exploded_input_data[1] ?? null;

    if ($_input_2 == 0) {
        echo "divisao impossivel\n";
    } else {
        $_output = $_input_1 / $_input_2;
        echo number_format($_output, 1, '.', '') . "\n";
    }
}
