<?php

function trigger()
{
    $_input = trim(fgets(STDIN));
    $_data  = explode(' ', $_input);

    if ($_data[0] <= 0 || $_data[1] <= 0) {
        return [];
    }

    $result = trigger();
    array_unshift($result, $_data);
    return $result;
}

// ****** saves data like [[1, 2], [3, 4], [5, 6]] ****** //
$data = trigger();

for ($i = 0; $i < count($data); $i++) {

    $_sum          = 0;
    $_array_values = [];

    $input_data = $data[$i];
    $x          = ($input_data[0] < $input_data[1]) ? (int) $input_data[0] : (int) $input_data[1];
    $y          = ($input_data[0] < $input_data[1]) ? (int) $input_data[1] : (int) $input_data[0];

    for ($j = $x; $j <= $y; $j++) {
        array_push($_array_values, $j);
        $_sum += $j;
    }

    echo implode(" ", $_array_values) . " Sum=" . $_sum . "\n";

}
