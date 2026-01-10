<?php
include "Libreria.php";

$minimo = 4000;
$maximo = 7000;

//Cantidad de números primos que no tengan el número 3 en sus cifras
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (cifrashalladas($num, 3) == 0 && EsPrimo($num)) {
				echo $num . ", ";
				$contar = $contar + 1;
	}
}
echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números primos que no tengan el número 3 en sus cifras", $contar);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
