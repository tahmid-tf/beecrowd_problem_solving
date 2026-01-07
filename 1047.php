<?php

$input          = trim(fgets(STDIN));
$exploded_input = explode(" ", $input);

$time_calc     = 0;
$time_calc_min = 0;

$start = $exploded_input[0];
$end   = $exploded_input[2];

$start_min = $exploded_input[1];
$end_min   = $exploded_input[3];

if ($start == 0 && $end == 0) {
    $time_calc = 24;
} elseif ($end == $start) {
    $time_calc = 0;
} elseif ($end < $start) {
    echo "this block\n";
    $time_calc = 24 - $start + $end;
} elseif ($start >= 12) {
    $time_calc = 24 - $start + $end;
} else {
    $time_calc = ((12 - $start) + ($end - 12));
}

if ($end_min > $start_min) {
    $time_calc_min = $end_min - $start_min;
} elseif ($end_min == $start_min) {
    $time_calc_min = 0;
} else {
    $time_calc                    = $time_calc - 1;
    $time_calc == -1 ? $time_calc = 0 : $time_calc = $time_calc;
    $time_calc_min                = (60 - $start_min) + $end_min;
}

echo "O JOGO DUROU $time_calc HORA(S) E $time_calc_min MINUTO(S)\n";
