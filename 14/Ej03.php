<?php 
//Se envía una función que retorna el resultado de a - b
$MiFuncion = function($a,$b){ return $a-$b; };
$prueba = Ejecuta($MiFuncion);
echo $prueba . "<br>";

//Se envía una función que retorna el resultado de a * b
$MiFuncion = function($a,$b){ return $a*$b; };
$prueba = Ejecuta($MiFuncion);
echo $prueba . "<br>";

//Se envía una función que retorna el resultado de a / b
$MiFuncion = function($a,$b){ return $a/$b; };
$prueba = Ejecuta($MiFuncion);
echo $prueba . "<br>";


//Esta función recibe como parámetro: ¡una función!
function Ejecuta($MiFuncion){
	$valorA = 15;
	$valorB = 10;
	//Dependiendo de la función recibida como parámetro, ejecuta la acción
	$resultado = $MiFuncion($valorA, $valorB);
	return $resultado;
}
