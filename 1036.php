<?php

$input = (fgets(STDIN));
$exploded_input = explode(" ", $input);
$a = floatval($exploded_input[0]);
$b = floatval($exploded_input[1]);
$c = floatval($exploded_input[2]);

if ($a == 0 || ($b * $b - 4 * $a * $c) < 0) {
    echo "Impossivel calcular\n";
    return;
}

$x1 = (-$b + sqrt($b * $b - 4 * $a * $c)) / (2 * $a);
$x2 = (-$b - sqrt($b * $b - 4 * $a * $c)) / (2 * $a);

echo "R1 = " . number_format($x1, 5, '.', '') . "\n";
echo "R2 = " . number_format($x2, 5, '.', '') . "\n";
