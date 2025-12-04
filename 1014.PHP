<?php
    $km = intval(trim(fgets(STDIN)));
    $liters = floatval(trim(fgets(STDIN)));
    
    $calculate = ($km / $liters);
    echo number_format($calculate, 3, '.', '') . " km/l\n";
?>