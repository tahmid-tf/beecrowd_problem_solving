<?php

$_array_data = [];
$_input      = intval(trim(fgets(STDIN)));
$_limit      = $_input * 4;
$_number     = 1;

for ($i = 1; $i <= $_limit; $i++) {
    if ($i % 4 == 0) {
        [$el1, $el2, $el3] = [pow($_number, 1), pow($_number, 2), pow($_number, 3)];
        array_push($_array_data, [$el1, $el2, $el3]);
        array_push($_array_data, [$el1, $el2 + 1, $el3 + 1]);
        $_number++;
    }
}

foreach ($_array_data as $data) {
    echo implode(' ', $data) . "\n";
}
