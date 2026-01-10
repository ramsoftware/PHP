<?php 
//Cálculo del área de un triángulo según sus lados (valores de ejemplo)
$ladoA = 3;
$ladoB = 4;
$ladoC = 5;
$s = ($ladoA+$ladoB+$ladoC)/2;
$area = sqrt($s*($s-$ladoA)*($s-$ladoB)*($s-$ladoC));
echo "Área es: " . $area;
