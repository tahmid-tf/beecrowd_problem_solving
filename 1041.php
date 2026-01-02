<?php
$input_value     = fgets(STDIN);
$exploded_values = explode(" ", $input_value);

if ($exploded_values[0] == 0 && $exploded_values[1] == 0) {
    echo "Origem\n";
} else if ($exploded_values[0] == 0) {
    echo "Eixo Y\n";
} else if ($exploded_values[1] == 0) {
    echo "Eixo X\n";
} else if ($exploded_values[0] > 0 && $exploded_values[1] > 0) {
    echo "Q1\n";
} else if ($exploded_values[0] < 0 && $exploded_values[1] > 0) {
    echo "Q2\n";
} else if ($exploded_values[0] < 0 && $exploded_values[1] < 0) {
    echo "Q3\n";
} else if ($exploded_values[0] > 0 && $exploded_values[1] < 0) {
    echo "Q4\n";
}
