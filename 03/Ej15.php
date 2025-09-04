<?php
/* 	Función recursiva
	Factorial(5) = 5 * Factorial(4)
	Es decir Factorial(N) = N * Factorial(N-1);
	y Factorial(0) = 1
*/
function factorial($numero) {
	if ($numero > 1 ) 
		return $numero * factorial($numero-1);
	else
		return 1;
}

echo "5! = " . factorial(5);
