<?php

for ($i = 0; $i <= 2 + 1e-9; $i += 0.2) {
    for ($j = 1; $j <= 3; $j++) {

        $I = round($i, 1);
        $J = round($I + $j, 1);

        if (fmod($I, 1) == 0.0) {
            echo "I=" . intval($I) . ' ' . "J=" . intval($J) . PHP_EOL;
        } else {
            echo "I=" . number_format($I, 1, '.', '') . ' ' . "J=" . number_format($J, 1, '.', '') . PHP_EOL;
        }
    }
}
