<?php
$inputs          = trim(fgets(STDIN));
$exploded_inputs = explode(" ", $inputs);

$a = $exploded_inputs[0];
$b = $exploded_inputs[1];

if ($a % $b == 0 || $b % $a == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}