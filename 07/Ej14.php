<?php 
//Dado un arreglo extraer los valores únicos
$numeros = [5,8,1,3,3,2,7,8,1,9,9,1,1,2,4,7,2,3,8,4,3,1,1,3,2,8,8,7];
$extrae = array();

for ($cont=0; $cont<count($numeros); $cont++)
	if ( BuscarEnArreglo( $numeros[$cont], $extrae) == false )
		array_push($extrae, $numeros[$cont] );

print_r($extrae); //Muestra el arreglo

//Muestra elemento a elemento del arreglo
echo "<br>";
for ($cont=0; $cont < count($extrae); $cont++){
	echo $extrae[$cont] . ", ";
}
		

function BuscarEnArreglo($num, $arreglo){ //Retorna true si encuentra num en arreglo
	for ($cont=0; $cont<count($arreglo); $cont++)
		if ($num==$arreglo[$cont]) 
			return true;
	return false;
}
