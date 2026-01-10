<?php
// Función recursiva. Suma las cifras de un número
function sumacifras($num) {
	if ($num < 10) return $num;
	return $num%10 + sumacifras(floor($num/10));
}

echo "cifras suman: " . sumacifras(701);
