<?php
include "Libreria.php";

$minimo = 1000;
$maximo = 9999;

//Cantidad de números palíndromos que tengan mínimo dos veces el 7 en sus cifras
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (cifrashalladas($num, 7) >= 2 && EsPalindromo($num)){
				echo $num . ", ";
				$contar = $contar + 1;
	}
}

echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números palíndromos que tengan mínimo dos veces el 7 en sus cifras", $contar);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
