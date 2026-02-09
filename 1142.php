<?php

$_array_data = [];
$_input      = intval(trim(fgets(STDIN)));
$_limit      = $_input * 4;

for ($i = 1; $i <= $_limit; $i++) {
    if ($i % 4 == 0) {
        [$el1, $el2, $el3] = [$i - 3, $i - 2, $i - 1];
        array_push($_array_data, [$el1, $el2, $el3]);
    }
}

foreach ($_array_data as $data) {
    echo implode(' ', $data) . " PUM\n";
}
