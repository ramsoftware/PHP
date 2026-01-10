<?php
include "Libreria.php";

$minimo = 1000;
$maximo = 9999;

//Cantidad de números primos que sus cifras están entre 3 y 7
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (EsPrimo($num) && LaCifraMasBaja($num) >= 3 && LaCifraMasAlta($num) <= 7) {
				echo $num . ", ";
				$contar = $contar + 1;
	}
}

echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números primos que sus cifras están entre 3 y 7", $contar);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
