<?php
//Potencia de un número
$valor = potencia(2, 7); //Retorna 2^7
echo $valor;

function potencia($numero, $elevado){
	if ($elevado==1) return $numero;
	return $numero * potencia($numero, $elevado - 1);
}
