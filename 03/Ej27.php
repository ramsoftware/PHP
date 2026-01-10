<?php
/* Distribución Triangular. Generar una variable aleatoria con valor mínimo A,
	 valor más probable B y valor máximo C
	 Si r < (B-A)/(C-A)
		Variable = A + raizcuadrada(r*(C-A)*(B-A))
	 de lo contrario
		Variable = C - raizcuadrada((1-r)*(C-A)*(C-B))
	 */
$A = 150; $B = 190; $C = 230; $variable = 0;
for ($cont=1; $cont<=100; $cont++){
	$r = mt_rand() / mt_getrandmax();
	if ($r < ($B-$A)/($C-$A))
		$variable = $A + sqrt($r*($C-$A)*($B-$A));
	else
		$variable = $C - sqrt((1-$r)*($C-$A)*($C-$B));
	echo $variable . ", ";
}
