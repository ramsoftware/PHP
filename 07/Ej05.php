<?php
//Llama a función que genera arreglo bidimensional
$tabla = GenerarArregloBidimensional(8);

echo "Filas: " . count($tabla) . "<br>";

//Llena el arreglo bidimensional de puntos
for ($fila=0; $fila < count($tabla); $fila++)
	for ($columna=0; $columna < 20; $columna++)
		$tabla[$fila][$columna]='.';
	
echo "Columnas: " . count($tabla[0]) . "<br>";
	
//Pone una X en una posición al azar 
$posF = rand(0, 7);
$posC = rand(0, 19);
$tabla[$posF][$posC] = 'X';

//Imprime la tabla		
for ($fila=0; $fila < count($tabla); $fila++){
	echo "<br>";
	for ($columna=0; $columna < count($tabla[$fila]); $columna++)
		echo $tabla[$fila][$columna];
}

//Función genérica para crear arreglo bidimensional
function GenerarArregloBidimensional($totalfilas) {
  $arreglo = array();
  for ($fila=0; $fila < $totalfilas; $fila++) $arreglo[$fila] = array();
  return $arreglo;
}
