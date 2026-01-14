<?php

$_second_loop_start = 7;
$_second_loop_limit = 5;

for ($i = 1; $i <= 9; $i += 2) {
    for ($j = $_second_loop_start; $j >= $_second_loop_limit; $j--) {
        echo "I=" . $i . ' ' . "J=" . $j . PHP_EOL;
    }

    $_second_loop_start += 2;
    $_second_loop_limit += 2;
}
