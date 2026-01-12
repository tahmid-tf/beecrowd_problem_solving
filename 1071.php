<?php

$input_1 = intval(trim(fgets(STDIN)));
$input_2 = intval(trim(fgets(STDIN)));

$odd_sum = 0;

for ($i = $input_1 - 1; $i > $input_2; $i--) {
    if ($i % 2 != 0) {
        $odd_sum += $i;
    }
}

echo $odd_sum . PHP_EOL;
