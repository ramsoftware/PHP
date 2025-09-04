<?php
/* Variable aleatoria
   Distribución Normal. Generar una variable aleatoria con media M y desviación D
   variable = M + D * c
   donde c = cos(2*PI*r2)*raizcuadrada(-2*LogarimoNatural(r1))
   r1 y r2 son números aleatorios	 */
$M = 100;
$D = 7;	 
for ($cont=1; $cont<=100; $cont++){
	$r1 = mt_rand() / mt_getrandmax();
	$r2 = mt_rand() / mt_getrandmax();
	$c = cos(2*M_PI*$r2)*sqrt(-2*log($r1));
	$variable = $M + $D * $c;
	echo $variable . ", ";
}
