<?php

$_limit      = intval(trim(fgets(STDIN)));
$_array_data = [];

for ($i = 0; $i < $_limit; $i++) {

    $_sum = 0;

    $_input          = trim(fgets(STDIN));
    $_exploded_input = explode(" ", $_input);

    if ($_exploded_input[0] % 2 == 0) {
        $_exploded_input[0] += 1;
    }

    for ($j = 0; $j < $_exploded_input[1]; $j++) {
        $_sum               += $_exploded_input[0];
        $_exploded_input[0] += 2;
    }

    array_push($_array_data, $_sum);
}

foreach ($_array_data as $key => $value) {
    echo $value . PHP_EOL;
}
