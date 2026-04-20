<?php

$_input = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= 10; $i++) {
    echo "$i x $_input = " . ($i * $_input);
    echo "\n";
}
