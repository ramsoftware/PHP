<?php 
//Se envía una función que retorna el resultado de a - b
$prueba = Ejecuta(5, 7, function($a,$b){ return $a-$b; });
echo $prueba . "<br>";

//Se envía una función que retorna el resultado de a * b
$prueba = Ejecuta(10, 3, function($a,$b){ return $a*$b; });
echo $prueba . "<br>";

//Se envía una función que retorna el resultado de a / b
$prueba = Ejecuta(9, 12, function($a,$b){ return $a/$b; });
echo $prueba . "<br>";


//Esta función recibe como parámetro: ¡una función!
function Ejecuta($valorA, $valorB, $MiFuncion){
	//Dependiendo de la función recibida como parámetro, ejecuta la acción
	$resultado = $MiFuncion($valorA, $valorB);
	return $resultado;
}
