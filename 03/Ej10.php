<?php
include "Libreria.php";

$minimo = 7700;
$maximo = 8000;

//Cantidad de números que la suma de sus cifras es impar y al menos tenga una vez el número 7
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (EsImpar(SumaCifras($num)) && cifrashalladas($num, 7) >= 1) {
		echo $num . ", ";
		$contar = $contar + 1;
	}
}

echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números que la suma de sus cifras es impar y al menos tenga una vez el número 7", $contar);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
