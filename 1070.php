<?php

$input  = intval(trim(fgets(STDIN)));
$length = 0;

for ($i = $input; $i <= 1000; $i++) {
    if ($length == 6) {
        break;
    }

    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
        $length++;
    }
}
