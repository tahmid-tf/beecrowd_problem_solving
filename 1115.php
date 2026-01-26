<?php

while (true) {
    $_input        = trim(fgets(STDIN));
    $exploded_data = explode(" ", $_input);

    $_input_1 = $exploded_data[0];
    $_input_2 = $exploded_data[1];

    if ($_input_1 == 0 || $_input_2 == 0) {
        break;
    } else if ($_input_1 > 0 && $_input_2 > 0) {
        echo "primeiro\n";
    } elseif ($_input_1 > 0 && $_input_2 < 0) {
        echo "quarto\n";
    } elseif ($_input_1 < 0 && $_input_2 < 0) {
        echo "terceiro\n";
    } else {
        echo "segundo\n";
    }
}
