<?php
    $a = intval(trim(fgets(STDIN)));
    $b = intval(trim(fgets(STDIN)));

    $fuel_spent = ($a * $b) / 12;
    echo number_format($fuel_spent, 3, '.', '') . "\n";
?>