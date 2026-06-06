<?php

$numbers         = [];
$_even_count     = 0;
$_odd_count      = 0;
$_positive_count = 0;
$_negative_count = 0;

for ($i = 0; $i < 5; $i++) {
    $numbers[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $_even_count++;
    } else if ($numbers[$i] % 2 != 0) {
        $_odd_count++;
    }
}

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $_positive_count++;
    } else if ($numbers[$i] < 0) {
        $_negative_count++;
    }
}

echo $_even_count . " valor(es) par(es)" . PHP_EOL;
echo $_odd_count . " valor(es) impar(es)" . PHP_EOL;
echo $_positive_count . " valor(es) positivo(s)" . PHP_EOL;
echo $_negative_count . " valor(es) negativo(s)" . PHP_EOL;
