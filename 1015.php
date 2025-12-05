<?php
    $data_1 = trim(fgets(STDIN));
    $data_2 = trim(fgets(STDIN));
   
    $exploded_data_1 = explode(" ", $data_1);
    $exploded_data_2= explode(" ", $data_2);

    $exploded_data_1_format = array_map("floatval", $exploded_data_1);
    $exploded_data_2_format = array_map("floatval", $exploded_data_2);

    $x = sqrt(pow($exploded_data_2_format[0] - $exploded_data_1_format[0],2) + pow($exploded_data_2_format[1] - $exploded_data_1_format[1],2));

    echo number_format($x, 4, '.', '') . "\n";

    ?>