<?php
/* Variable aleatoria
   Distribución uniforme. Generar un número entero entre A y B
   variable = r * (B - A) + A	 */
$A = 10;
$B = 50;	 
for ($cont=1; $cont<=100; $cont++){
	$r = mt_rand() / mt_getrandmax();
	$variable = $r * ($B - $A) + $A;
	echo $variable . ", ";
}
