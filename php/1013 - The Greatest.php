<?php
    $data = trim(fgets(STDIN));
    $exploded_data = explode(" ", $data);

    $exploded_data_to_int = array_map('intval', $exploded_data);
    rsort($exploded_data_to_int);
    print($exploded_data_to_int[0] . " eh o maior\n");
?>