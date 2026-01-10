<?php 
$valores = [-363, -1793, -2601, -2541, 6376, 6053, 503, 1601, -2994, 6480, 998];
Imprime("Original: ", $valores);
OrdenarInsercion($valores);
Imprime("Ordenado: ", $valores);

//Algoritmo de ordenación por inserción
function OrdenarInsercion(& $arreglo){
	for ($i = 0; $i < count($arreglo); ++$i) {
	  $tmp = $arreglo[$i];
	  for ($j = $i - 1; $j >= 0 && $arreglo[$j] > $tmp; --$j)
		 $arreglo[$j + 1] = $arreglo[$j];
	  $arreglo[$j + 1] = $tmp;
	 }
}

function Imprime($texto, $arreglo){
	echo "<br>" . $texto;
	for ($cont=0; $cont < count($arreglo); $cont++){
		echo $arreglo[$cont] . ", ";
	}
}
