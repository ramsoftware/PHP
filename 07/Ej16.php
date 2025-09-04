<?php 
// Separe los elementos pares e impares de una lista, y retorne ambas listas
$numeros = [10, 13, 20, 24, 23, 2, 23, 29, 5, 19, 8, 6, 16, 2, 6, 27];
$pares = retornaPares($numeros);
$impares = retornaImpares($numeros);
echo "Pares: ";
print_r($pares);
echo "<br>Impares: ";
print_r($impares);

function retornaPares($valores){
	$par = array();
	for ($cont=0; $cont<count($valores); $cont++)
		if ($valores[$cont]%2===0)
			array_push($par, $valores[$cont]);
	return $par;
}

function retornaImpares($valores){
	$impar = array();
	for ($cont=0; $cont<count($valores); $cont++)
		if ($valores[$cont]%2!==0)
			array_push($impar, $valores[$cont]);
	return $impar;
}
