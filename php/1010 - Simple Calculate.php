<?php
    $input_1 = trim(fgets(STDIN));
    $input_2 = trim(fgets(STDIN));

    $product_info_1 = explode(" ", $input_1);
    $product_info_2 = explode(" ", $input_2);
    
    $product_1 = $product_info_1[1] * $product_info_1[2];
    $product_2 = $product_info_2[1] * $product_info_2[2];
    
    echo "VALOR A PAGAR: R$ " . number_format($product_1 + $product_2, 2, '.', '') . "\n";
?>