<?php

$_limit      = 100;
$_array_data = [];

for ($i = 0; $i < $_limit; $i++) {
    $input_data = intval(trim(fgets(STDIN)));
    array_push($_array_data, $input_data);
}

$_max_value    = max($_array_data);
$_search_index = array_search($_max_value, $_array_data) + 1;

echo $_max_value . "\n";
echo $_search_index . "\n";
