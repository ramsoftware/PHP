<?php
include "Libreria.php";

$minimo = 1000;
$maximo = 9999;

//Cantidad de números que la suma de las tres últimas cifras es par
$cuenta = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (EsPar(AntepenultimaCifra($num) + UltimaCifra($num) + PenultimaCifra($num))){
				$cuenta++;
	}
}

Imprime($minimo, $maximo, "Cantidad de números que la suma de las tres últimas cifras es par", $cuenta);

//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
