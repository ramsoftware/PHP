<?php 
$valores = [-363, -1793, -2601, -2541, 6376, 6053, 503, 1601, -2994, 6480, 998];
Imprime("Original: ", $valores);
OrdenarBurbuja($valores);
Imprime("Ordenado: ", $valores);

//Ordenación por el método de burbuja, el arreglo se recibe por referencia
function OrdenarBurbuja(& $arreglo){
	for ($i=0; $i<count($arreglo)-1; $i++)
		for ($j=0; $j<count($arreglo)-$i-1; $j++)
			if ($arreglo[$j]>$arreglo[$j+1]){
				$aux = $arreglo[$j];
				$arreglo[$j] = $arreglo[$j+1];
				$arreglo[$j+1] = $aux;
			}
}

function Imprime($texto, $arreglo){
	echo "<br>" . $texto;
	for ($cont=0; $cont < count($arreglo); $cont++){
		echo $arreglo[$cont] . ", ";
	}
}
