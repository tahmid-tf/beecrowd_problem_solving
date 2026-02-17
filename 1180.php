<?php

$_input_limit = intval(trim(fgets(STDIN)));
$_array_input = trim(fgets(STDIN));
$array_data   = explode(" ", $_array_input);
$value        = $array_data[0];

for ($i = 1; $i < $_input_limit; $i++) {
    if ($value > $array_data[$i]) {
        $value = $array_data[$i];
    }
}

echo "Menor valor: " . $value . "\n";
echo "Posicao: " . array_search($value, $array_data) . "\n";
