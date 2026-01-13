<?php

$_input = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $_input; $i++) {
    if ($i % 2 == 0) {
        echo "$i^2 = " . pow($i, 2) . "\n";
    }
}
