<?php

$array  = [0, 1];
$_input = intval(trim(fgets(STDIN))) - 2;

for ($i = 0; $i < $_input; $i++) {
    $_new_number = $array[$i] + $array[$i + 1];
    array_push($array, $_new_number);
}

echo implode(" ", $array) . "\n";
