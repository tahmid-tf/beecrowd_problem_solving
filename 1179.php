<?php

$par   = [];
$impar = [];
$n     = 1;

while ($n <= 15) {
    $_input = intval(trim(fgets(STDIN)));
    $n++;

    if ($_input % 2 == 0) {
        array_push($par, $_input);
    } else {
        array_push($impar, $_input);
    }

    if (count($par) == 5) {
        for ($i = 0; $i < 5; $i++) {
            echo "par[$i] = $par[$i]\n";
        }
        $par = [];
    }

    if (count($impar) == 5) {
        for ($i = 0; $i < 5; $i++) {
            echo "impar[$i] = $impar[$i]\n";
        }
        $impar = [];
    }

}

for ($i = 0; $i < count($impar); $i++) {
    echo "impar[$i] = $impar[$i]\n";
}

for ($i = 0; $i < count($par); $i++) {
    echo "par[$i] = $par[$i]\n";
}
