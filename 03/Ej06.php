<?php
include "Libreria.php";

$minimo = 8500;
$maximo = 8700;

//Cantidad de números que al juntar la antepenúltima cifra y la última cifra se obtenga un primo
$contar = 0;
for ($num = $minimo; $num<=$maximo; $num++){
	$nuevo = AntepenultimaCifra($num) * 10 + UltimaCifra($num);
	if (EsPrimo($nuevo)){
		echo $num . ", ";
		$contar = $contar + 1;
	}
}
echo "<br>";
Imprime($minimo, $maximo, "Cantidad de números que al juntar la antepenúltima cifra y la última cifra se obtenga un primo", $contar);



//Imprime el resultado en el navegador
function Imprime($minimo, $maximo, $texto, $resultado){
	echo "Entre " . $minimo . " y " . $maximo . ". " . $texto . ": " . $resultado . "<br>";
}
