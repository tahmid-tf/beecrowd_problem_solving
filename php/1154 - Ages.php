<?php

$_age_array = [];

while (true) {
    $_input = intval(trim(fgets(STDIN)));
    if ($_input < 0) {
        break;
    }
    array_push($_age_array, $_input);

}

$_avg = array_sum($_age_array) / count($_age_array) . "\n";
echo number_format($_avg, 2) . "\n";
