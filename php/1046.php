<?php

$input          = trim(fgets(STDIN));
$exploded_input = explode(" ", $input);

$start = $exploded_input[0];
$end   = $exploded_input[1];

if ($start == 0 && $end == 0) {
    echo "O JOGO DUROU 24 HORA(S)\n";
} elseif ($start >= 12) {
    $time_calc = 24 - $start + $end;
    echo "O JOGO DUROU $time_calc HORA(S)\n";
} else {
    $time_calc = ((12 - $start) + ($end - 12));
    echo "O JOGO DUROU $time_calc HORA(S)\n";
}
