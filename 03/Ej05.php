<?php
include "Libreria.php";

$minimo = 8000;
$maximo = 9000;

//Cantidad de números que cada una de sus tres últimas cifras es menor de 5
$cuenta = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	if (AntepenultimaCifra($num) < 5 && PenultimaCifra($num) < 5 && UltimaCifra($num) < 5){
			echo $num . ", ";
			$cuenta = $cuenta + 1;
	}
}
echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números que cada una de sus tres últimas cifras es menor de 5", $cuenta);


//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
