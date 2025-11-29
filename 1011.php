<?php
    $radius = intval(trim(fgets(STDIN)));
    $pi = 3.14159;
    $volume = (4 / 3) * $pi * (pow($radius, 3));
    echo "VOLUME = " . number_format($volume, 3, '.', '') . "\n";
?>