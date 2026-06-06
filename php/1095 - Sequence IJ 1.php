<?php

$j = 60;

for ($i = 1; $i <= 100; $i += 3) {

    if ($j == 0) {
        echo "I=" . $i . " J=" . $j . PHP_EOL;
        break;
    }

    echo "I=" . $i . " J=" . $j . PHP_EOL;
    $j -= 5;
}
