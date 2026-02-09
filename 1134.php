<?php

$_acohol     = 0;
$_gasolin    = 0;
$_diesel     = 0;
$_loop_cycle = true;

while ($_loop_cycle) {
    $_input = intval(trim(fgets(STDIN)));

    if ($_input == 1) {
        $_acohol++;
    } elseif ($_input == 2) {
        $_gasolin++;
    } elseif ($_input == 3) {
        $_diesel++;
    } elseif ($_input == 4) {
        $_loop_cycle = false;
    } else {
        continue;
    }
}

echo "MUITO OBRIGADO\n";
echo "Alcool: " . $_acohol . "\n";
echo "Gasolina: " . $_gasolin . "\n";
echo "Diesel: " . $_diesel . "\n";
