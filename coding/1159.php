<?php

$_array_data = [];

while (true) {

    $_sum   = 0;
    $_input = trim(fgets(STDIN));

    if ($_input == 0) {
        break;
    }

    if ($_input % 2 != 0) {
        $_input += 1;
    }

    for ($j = 0; $j < 5; $j++) {
        $_sum   += $_input;
        $_input += 2;
    }

    array_push($_array_data, $_sum);
}

foreach ($_array_data as $key => $value) {
    echo $value . PHP_EOL;
}
