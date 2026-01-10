<?php
include "Libreria.php";

$minimo = 5000;
$maximo = 9000;

//Cantidad de números que tengan solo cifras pares y al menos un número 4
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (cifrashalladas($num, 4) >= 1 && TodasCifrasPares($num)) {
				echo $num . ", ";
				$contar = $contar + 1;
	}
}
echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números que tengan solo cifras pares y al menos un número 4", $contar);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
