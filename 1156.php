<?php

$_sum         = 0;
$_up_number   = 1;
$_down_number = 1;

while ($_up_number <= 39) {
    $_sum         += $_up_number / $_down_number;
    $_up_number   += 2;
    $_down_number *= 2;
}

echo number_format($_sum, 2, '.', '') . "\n";
