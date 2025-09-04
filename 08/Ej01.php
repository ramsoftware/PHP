<?php 
$letras = ['r', 'v', 'e', 'g', 't', 'u', 'd', 'f', 'f', 'y', 'v'];
Imprime("Original: ", $letras);
OrdenarBurbuja($letras);
Imprime("Ordenado: ", $letras);

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
