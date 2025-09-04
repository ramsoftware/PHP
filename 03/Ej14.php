<?php
//Ámbito (scope) de una variable
$valor = 17;

//Imprime 17
echo "<br>Valor antes de la función es: " . $valor;

prueba(); //Llama a la función

//Imprime 17
echo "<br>Valor después de la función es: " . $valor;

function prueba(){
	//Mensaje de error, $valor no ha sido definida dentro de la función
	echo "<br>Valor dentro de la función es: " . $valor;
}
