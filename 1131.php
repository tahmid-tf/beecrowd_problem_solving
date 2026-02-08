<?php

$_array_data    = [];
$_inter_count   = 0;
$_gremio_count  = 0;
$_empates_count = 0;
$_loop_cycle    = true;

while ($_loop_cycle) {
    $_input               = trim(fgets(STDIN));
    $_exploded_input_data = explode(" ", $_input);
    $_inter               = $_exploded_input_data[0];
    $_gremio              = $_exploded_input_data[1] ?? null;

    if ($_inter == 1 && $_gremio == null) {
        continue;
    } else if ($_inter == 2 && $_gremio == null) {
        $_loop_cycle = false;
    } else {
        echo "Novo grenal (1-sim 2-nao)\n";
        array_push($_array_data, [$_inter, $_gremio]);
    }

}

for ($i = 0; $i <= count($_array_data) - 1; $i++) {
    if ((int) $_array_data[$i][0] > (int) $_array_data[$i][1]) {
        $_inter_count += 1;
    } elseif ((int) $_array_data[$i][0] < (int) $_array_data[$i][1]) {
        $_gremio_count += 1;
    } else {
        $_empates_count += 1;
    }
}

echo count($_array_data) . " grenais\n";
echo "Inter:" . $_inter_count . "\n";
echo "Gremio:" . $_gremio_count . "\n";
echo "Empates:" . $_empates_count . "\n";

if ($_inter_count > $_gremio_count) {
    echo "Inter venceu mais\n";
} elseif ($_inter_count < $_gremio_count) {
    echo "Gremio venceu mais\n";
} else {
    echo "Não houve vencedor\n";
}
