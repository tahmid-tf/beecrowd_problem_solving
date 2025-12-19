<?php
    $possible_banknotes = [100, 50, 20, 10, 5, 2, 1];
    $amount = intval(trim(fgets(STDIN)));
    $original_amount = $amount;
    echo $original_amount."\n";

    foreach ($possible_banknotes as $banknote) {
        $count = intval($amount / $banknote);
        $amount = $amount % $banknote;
        echo "$count nota(s) de R$ " . number_format($banknote, 2, ',', '') . "\n";
    }
?>