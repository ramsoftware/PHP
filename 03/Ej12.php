<?php
include "Libreria.php";

$minimo = 10;
$maximo = 9999;

//Cantidad de números primos y a su vez palíndromos
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (EsPrimo($num) && EsPalindromo($num)) {
				echo $num . ", ";
				$contar = $contar + 1;
	}
}

echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números primos y a su vez palíndromos", $contar);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
