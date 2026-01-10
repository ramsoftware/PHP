<?php
//Crea el arreglo bidimensional
$tabla = array(); //Crea las filas

//Crea las columnas
for ($fila=0; $fila < 8; $fila++) 
	$tabla[$fila] = array();

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
