<?php

$input = trim(fgets(STDIN));

if ($input >= 0.00 && $input <= 2000.00) {
    echo 'Isento' . "\n";
} elseif ($input >= 2000.01 && $input <= 3000.00) {
    $value       = $input - 2000;
    $calculation = $value * 0.08;
    echo 'R$ ' . number_format($calculation, 2, '.', '') . "\n";
} elseif ($input >= 3000.01 && $input <= 4500.00) {
    $value       = $input - 3000;
    $calculation = 80 + ($value * 0.18);
    echo 'R$ ' . number_format($calculation, 2, '.', '') . "\n";
} else {
    $value       = $input - 4500;
    $calculation = 80 + 270 + ($value * 0.28);
    echo 'R$ ' . number_format($calculation, 2, '.', '') . "\n";
}
