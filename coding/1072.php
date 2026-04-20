<?php

$numbers = [];

$_limit     = intval(trim(fgets(STDIN)));
$_in_count  = 0;
$_out_count = 0;

for ($i = 0; $i < $_limit; $i++) {
    $numbers[$i] = intval(trim(fgets(STDIN)));
}

for ($i = 0; $i < $_limit; $i++) {
    if ($numbers[$i] >= 10 && $numbers[$i] <= 20) {
        $_in_count++;
    } else {
        $_out_count++;
    }
}

echo $_in_count . " in\n";
echo $_out_count . " out\n";
