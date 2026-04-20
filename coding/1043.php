<?php
    $inputs = trim(fgets(STDIN));
    $exploded_inputs = explode(" ", $inputs);
    
    $a = $exploded_inputs[0];
    $b = $exploded_inputs[1];
    $c = $exploded_inputs[2];
    
   if(($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) {
       $perimetro = $a + $b + $c;
       echo "Perimetro = " . number_format($perimetro, 1, '.', '') . "\n";
   } else {
       $area = (($a + $b) * $c) / 2;
       echo "Area = " . number_format($area, 1, '.', '') . "\n";

   }
?>
