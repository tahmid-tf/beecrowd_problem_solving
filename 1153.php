<?php

$_input = intval(trim(fgets(STDIN)));
$_calc  = 1;

for ($i = $_input; $i >= 1; $i--) {
    $_calc *= $i;
}

echo $_calc . "\n";
