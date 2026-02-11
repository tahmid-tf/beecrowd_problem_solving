<?php

$_sum = 1;

for ($i = 2; $i <= 100; $i++) {
    $_sum += (1 / $i);
}

echo number_format($_sum, 2, '.') . "\n";
