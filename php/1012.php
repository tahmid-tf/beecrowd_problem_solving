<?php 

$data = (fgets(STDIN));
$format = explode(" ", $data);
$A = floatval($format[0]);
$B = floatval($format[1]);
$C = floatval($format[2]);

$rectangle_triangle = ($A * $C) / 2;
$circle = 3.14159 * pow($C, 2);
$trapezium = (($A + $B) * $C) / 2;
$square = pow($B, 2);
$rectangle = $A * $B;

echo "TRIANGULO: " . number_format($rectangle_triangle, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($circle, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($trapezium, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($square, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($rectangle, 3, '.', '') . "\n";

?>