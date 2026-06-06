<?php

$_array_values = [];
$_loop_cycle   = true;

while ($_loop_cycle) {
    $_input = intval(trim(fgets(STDIN)));
    if ($_input == 0) {
        $_loop_cycle = false;
        continue;
    }
    array_push($_array_values, $_input);
}

for ($i = 0; $i < count($_array_values); $i++) {
    $_line = '';
    for ($j = 1; $j <= $_array_values[$i]; $j++) {
        if ($j > 1) {
            $_line .= ' ';
        }
        $_line .= $j;
    }
    echo $_line . "\n";
}
