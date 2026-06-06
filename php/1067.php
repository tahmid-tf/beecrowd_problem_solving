<?php

$input = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $input; $i++) {
    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}
