<?php

$loop_execution = true;
$limit          = 0;
$_value_array   = [];

while ($loop_execution) {
    if ($limit == 2) {
        $_average = ($_value_array[0] + $_value_array[1]) / $limit;
        echo "media = " . number_format($_average, '2', '.', '') . "\n";
    } elseif ($limit > 2) {
        echo "novo calculo (1-sim 2-nao)\n";
    }

    $_input = trim(fgets(STDIN));

    if ($_input == 1) {
        echo "novo calculo (1-sim 2-nao)\n";
        $_value_array = [];
        $limit        = 0;
        continue;
    } elseif ($_input == 2) {
        echo "novo calculo (1-sim 2-nao)\n";
        return;
    }

    if ($_input < 0 || $_input > 10) {
        echo "nota invalida\n";
    } else {
        if ($_input != 1 || $_input != 2 || $limit <= 2) {
            array_push($_value_array, $_input);
            $limit++;
        }
    }
}
