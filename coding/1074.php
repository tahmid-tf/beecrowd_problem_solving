<?php

$_limit  = intval(trim(fgets(STDIN)));
$numbers = [];

for ($i = 0; $i < $_limit; $i++) {
    $numbers[] = intval(trim(fgets(STDIN)));
}

for ($i = 0; $i < $_limit; $i++) {
    if ($numbers[$i] % 2 == 0 && $numbers[$i] < 0) {
        echo "EVEN NEGATIVE\n";
    } elseif ($numbers[$i] % 2 == 0 && $numbers[$i] > 0) {
        echo "EVEN POSITIVE\n";
    } elseif ($numbers[$i] % 2 != 0 && $numbers[$i] > 0) {
        echo "ODD POSITIVE\n";
    } elseif ($numbers[$i] % 2 != 0 && $numbers[$i] < 0) {
        echo "ODD NEGATIVE\n";
    } else {
        echo "NULL\n";
    }
}