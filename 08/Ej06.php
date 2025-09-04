<?php 
$valores = [8,7,6,5,4,3,2,1];
Imprime("Original: ", $valores); echo "<br>";
$nuevo = mergesort($valores);
Imprime("Ordenado: ", $nuevo);

function mergesort($arreglo){
	if(count($arreglo) <= 1) return $arreglo;
	$mitad = floor(count($arreglo) / 2);
	$izquierdo = array_slice($arreglo, 0, $mitad);
	$derecho = array_slice($arreglo, $mitad, count($arreglo));
	return merge(mergesort($izquierdo), mergesort($derecho));
}
 
function merge($izquierdo, $derecho){
	$ordenado = array();
	while (count($izquierdo) > 0 && count($derecho) > 0){
		$b = $izquierdo[0] <= $derecho[0];
		if($b) $ordenado[]=$izquierdo[0]; else $ordenado[]=$derecho[0];
		if($b) array_splice($izquierdo,0,1); else array_splice($derecho,0,1);
	}
	return array_merge($ordenado, $izquierdo, $derecho);
}

function Imprime($texto, $arreglo){
	echo "<br>" . $texto;
	for ($cont=0; $cont < count($arreglo); $cont++){
		echo $arreglo[$cont] . ", ";
	}
}
