<?php
// Función recursiva. Máximo común divisor con algoritmo de Euclides
function maximocomundivisor($numA, $numB) {
	if($numA < $numB) return maximocomundivisor($numB,$numA);
	if($numB == 0) return $numA;
	return maximocomundivisor($numB, $numA % $numB);
}

$numero = maximocomundivisor(1000, 750);
echo "Máximo común divisor de 1000 y 750 es " . $numero;
