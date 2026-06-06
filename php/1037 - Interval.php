<?php

// problem 1037

$array_values = ['[0,25]', '(25,50]', '(50,75]', '(75,100]'];
$input_value  = floatval(trim(fgets(STDIN)));

if ($input_value >= 0 && $input_value <= 25) {
    echo "Intervalo " . $array_values[0] . "\n";
} else if ($input_value > 25 && $input_value <= 50) {
    echo "Intervalo " . $array_values[1] . "\n";
} else if ($input_value > 50 && $input_value <= 75) {
    echo "Intervalo " . $array_values[2] . "\n";
} else if ($input_value > 75 && $input_value <= 100) {
    echo "Intervalo " . $array_values[3] . "\n";
} else {
    echo "Fora de intervalo\n";
}
