<?php
$_input_limit = intval(trim(fgets(STDIN)));
$_input_data  = [];

for ($i = 0; $i < $_input_limit; $i++) {
    $_input_data[$i] = trim(fgets(STDIN));
}

$_total_coelhos = array_sum(array_map(function ($item) {
    return explode(' ', $item)[0];
}, array_filter($_input_data, function ($value) {
    return str_ends_with($value, ' C');
})));

$_total_ratos = array_sum(array_map(
    function ($item) {
        return explode(' ', $item)[0];
    },
    array_filter($_input_data, function ($value) {
        return str_ends_with($value, ' R');
    })
));

$_total_sapos = array_sum(array_map(
    function ($item) {
        return explode(' ', $item)[0];
    },
    array_filter($_input_data, function ($value) {
        return str_ends_with($value, ' S');
    })));

$_total_calculation = $_total_coelhos + $_total_ratos + $_total_sapos;

echo "Total: $_total_calculation cobaias" . PHP_EOL;
echo "Total de coelhos: " . $_total_coelhos . PHP_EOL;
echo "Total de ratos: " . $_total_ratos . PHP_EOL;
echo "Total de sapos: " . $_total_sapos . PHP_EOL;
echo "Percentual de coelhos: " . number_format((($_total_coelhos / $_total_calculation) * 100), 2) . " %" . PHP_EOL;
echo "Percentual de ratos: " . number_format((($_total_ratos / $_total_calculation) * 100), 2) . " %" . PHP_EOL;
echo "Percentual de sapos: " . number_format((($_total_sapos / $_total_calculation) * 100), 2) . " %" . PHP_EOL;
