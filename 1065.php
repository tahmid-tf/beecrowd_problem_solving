<?php

$numbers     = [];
$_even_count = 0;

for ($i = 0; $i < 5; $i++) {
    $numbers[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $_even_count++;
    }
}

echo $_even_count . " valores pares" . PHP_EOL;
