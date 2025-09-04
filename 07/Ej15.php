<?php 
//Función genérica para hallar menor y mayor valor
$pagar = [1120, 6040, 1570, 5205, 3147, 7361, 166, 1002, 1572, 6567];

$menor = BuscaMenorValor($pagar);
$mayor = BuscaMayorValor($pagar);
echo "Menor cuantía es: " . $menor;
echo "<br>Mayor cuantía es: " . $mayor;

function BuscaMenorValor($arreglo){ //Función genérica
	$minimo = $arreglo[0];
	for($cont=1; $cont < count($arreglo); $cont++)
		if ($arreglo[$cont] < $minimo) $minimo = $arreglo[$cont];	
	return $minimo;
}

function BuscaMayorValor($arreglo){ //Función genérica
	$maximo = $arreglo[0];
	for($cont=1; $cont < count($arreglo); $cont++)
		if ($arreglo[$cont] > $maximo) $maximo = $arreglo[$cont];	
	return $maximo;
}
