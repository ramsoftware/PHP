<?php 
$valores = [-363, -1793, -2601, -2541, 6376, 6053, 503, 1601, -2994, 6480, 998];
Imprime("Original: ", $valores);
$nuevo = quicksort($valores);
Imprime("Ordenado: ", $nuevo);

function quicksort($arreglo){
	if(count($arreglo) == 0) return $arreglo;
	$izq = $der = array();
	$pivote = $arreglo[0];
	
	for ($i = 1; $i < count($arreglo); $i++)
		if ($arreglo[$i] < $pivote)
			$izq[] = $arreglo[$i];
		else
			$der[] = $arreglo[$i];	

	return array_merge(quicksort($izq),array(0=>$pivote),quicksort($der));
}

function Imprime($texto, $arreglo){
	echo "<br>" . $texto;
	for ($cont=0; $cont < count($arreglo); $cont++){
		echo $arreglo[$cont] . ", ";
	}
}
