<?php

$X     = intval(trim(fgets(STDIN)));
$Z     = 0;
$_step = 0;
$_sum  = 0;
$_step = 0;

while ($Z <= $X) {
    $Z = intval(trim(fgets(STDIN)));
}

while ($_sum <= $Z) {
    $_sum += $X;
    $_step++;
    $X++;
}

echo $_step . "\n";
