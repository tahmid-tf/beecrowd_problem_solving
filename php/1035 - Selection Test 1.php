<?php
    $input = (fgets(STDIN));
    $exploded_input = explode(" ", $input);
    $A = intval($exploded_input[0]);
    $B = intval($exploded_input[1]);
    $C = intval($exploded_input[2]);
    $D = intval($exploded_input[3]);

    if($B > $C && $D > $A && ($C + $D) > ($A + $B) && $C > 0 && $D > 0 && $A % 2 == 0) {
        echo "Valores aceitos\n";
    } else {
        echo "Valores nao aceitos\n";

    }
?>