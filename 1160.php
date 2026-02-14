<?php

$input_length = intval(trim(fgets(STDIN)));
$_values      = [];
$_years_array = [];

for ($i = 0; $i < $input_length; $i++) {
    $_array_input    = trim(fgets(STDIN));
    $_exploded_input = explode(" ", $_array_input);
    $inp_1           = $_exploded_input[0];
    $inp_2           = $_exploded_input[1];
    $inp_3           = $_exploded_input[2];
    $inp_4           = $_exploded_input[3];

    array_push($_values, [$inp_1, $inp_2, $inp_3, $inp_4]);
}

foreach ($_values as $value) {
    $PA   = $value[0];
    $PB   = $value[1];
    $G1   = $value[2];
    $G2   = $value[3];
    $year = 0;

    while ($PA <= $PB) {

        $PA += floor($PA * $G1 / 100);
        $PB += floor($PB * $G2 / 100);
        $year++;

        if ($year > 100) {
            break;
        }
    }

    $year <= 100 ? $_years_array[] = $year . ' anos.' : $_years_array[] = 'Mais de 1 seculo.';

}

foreach ($_years_array as $value) {
    echo $value . "\n";
}
