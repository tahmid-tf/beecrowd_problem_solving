<?php

$_array_data     = [];
$_input          = trim(fgets(STDIN));
$_exploded_input = explode(' ', $_input);

$_line_limit = $_exploded_input[0];
$_limit      = $_exploded_input[1];

$temp = [];

for ($i = 1; $i <= $_limit; $i++) {
    $temp[] = $i;
    if (count($temp) == $_line_limit) {
        array_push($_array_data, $temp);
        $temp = [];
    }
}

foreach ($_array_data as $data) {
    echo implode(' ', $data) . "\n";
}
