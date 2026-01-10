<?php 
$valorA = [2, 4, 6, 1, 3, 7];
$valorB = [8, 10, 12, 32, 42, 52];

//Une los dos arreglos en un tercero
$nuevo = array_merge($valorA, $valorB);
Imprime("Fusionado: ", $nuevo);

//Extrae los 4 primeros valores de un arreglo y los guarda en un tercero
$nuevo = array_slice($valorA, 0, 4);
Imprime("Parcial: ", $nuevo);

//Borra los dos primeros valores de un arreglo
array_splice($valorB, 0, 2);
Imprime("Cortado: ", $valorB);


function Imprime($texto, $arreglo){
	echo "<br>" . $texto;
	for ($cont=0; $cont < count($arreglo); $cont++){
		echo $arreglo[$cont] . ", ";
	}
}
