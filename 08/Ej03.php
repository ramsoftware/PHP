<?php 
$valores = [-363, -1793, -2601, -2541, 6376, 6053, 503, 1601, -2994, 6480, 998];
Imprime("Original: ", $valores);
OrdenarSeleccion($valores);
Imprime("Ordenado: ", $valores);

//Ordenación por selección
function OrdenarSeleccion(& $arreglo){
	for($i=0; $i<count($arreglo)-1; $i++){
		$tmp = $i;
		for ($j=$i+1; $j<count($arreglo); $j++)
			if ($arreglo[$j] < $arreglo[$tmp])
				$tmp = $j;
		
		$temporal = $arreglo[$tmp];
		$arreglo[$tmp] = $arreglo[$i];
		$arreglo[$i] = $temporal;
	}
}

function Imprime($texto, $arreglo){
	echo "<br>" . $texto;
	for ($cont=0; $cont < count($arreglo); $cont++){
		echo $arreglo[$cont] . ", ";
	}
}
