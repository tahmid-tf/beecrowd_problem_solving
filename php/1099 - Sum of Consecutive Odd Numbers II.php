<?php

$_limit          = intval(trim(fgets(STDIN)));
$_sum_of_numbers = [];

for ($i = 0; $i < $_limit; $i++) {
    $input_data = explode(" ", trim(fgets(STDIN)));

    $_sum = 0;
    $x    = ($input_data[0] < $input_data[1]) ? (int) $input_data[0] : (int) $input_data[1];
    $y    = ($input_data[0] < $input_data[1]) ? (int) $input_data[1] : (int) $input_data[0];

    for ($j = ($x + 1); $j < $y; $j++) {
        if ($j % 2 != 0) {
            $_sum += $j;
        }
    }

    array_push($_sum_of_numbers, $_sum);
}

foreach ($_sum_of_numbers as $number) {
    echo "$number\n";
}
