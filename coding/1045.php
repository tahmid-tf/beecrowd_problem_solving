<?php

$inp    = trim(fgets(STDIN));
$inputs = explode(" ", $inp);
rsort($inputs, SORT_NUMERIC);

$a = floatval($inputs[0]);
$b = floatval($inputs[1]);
$c = floatval($inputs[2]);

if ($a >= ($b + $c)) {
    echo "NAO FORMA TRIANGULO\n";
    exit;
}

$epsilon = 0.00001;

if (abs(($a * $a) - (($b * $b) + ($c * $c))) < $epsilon) {
    echo "TRIANGULO RETANGULO\n";
} elseif (($a * $a) > (($b * $b) + ($c * $c)) + $epsilon) {
    echo "TRIANGULO OBTUSANGULO\n";
} elseif (($a * $a) < (($b * $b) + ($c * $c)) - $epsilon) {
    echo "TRIANGULO ACUTANGULO\n";
}

if ($a == $b && $a == $c) {
    echo "TRIANGULO EQUILATERO\n";
} elseif ($a == $b || $a == $c || $b == $c) {
    echo "TRIANGULO ISOSCELES\n";
}
