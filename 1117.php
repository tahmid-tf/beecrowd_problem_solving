<?php

$loop_execution = true;
$limit          = 0;
$_value_array   = [];

while ($loop_execution) {
    if ($limit == 2) {
        $_average = ($_value_array[0] + $_value_array[1]) / $limit;
        echo "media = " . number_format($_average, '2', '.', '') . "\n";
        return;
    }

    $_input = trim(fgets(STDIN));

    if ($_input < 0 || $_input > 10) {
        echo "nota invalida\n";
    } else {
        array_push($_value_array, $_input);
        $limit++;
    }
}
