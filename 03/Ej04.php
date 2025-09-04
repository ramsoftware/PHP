<?php
include "Libreria.php";

$minimo = 1000;
$maximo = 9999;

//Cantidad de números que la multiplicación de las tres últimas cifras es igual a la suma de esas tres últimas cifras
$cuenta = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if(AntepenultimaCifra($num) * UltimaCifra($num) * PenultimaCifra($num) == AntepenultimaCifra($num) + UltimaCifra($num) + PenultimaCifra($num)){
				$cuenta = $cuenta + 1;
	}
}
Imprime($minimo, $maximo, "Cantidad de números que la multiplicación de las tres últimas cifras es igual a la suma de esas tres últimas cifras", $cuenta);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
