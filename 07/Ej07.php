<?php
/* Crear un tablero de ajedrez de 8*8, poner en una posición al 
   azar una Torre y mostrar su ataque */
$tabla = GeneraArregloBidimensional(8, 8, '.');
$tabla = PoneTorreAzar($tabla);
ImprimeArregloBidimensional($tabla);

//Pone una torre al azar y muestra su ataque
function PoneTorreAzar($arreglo){
	$filaAzar = rand(0, count($arreglo)-1);
	$coluAzar = rand(0, count($arreglo[0])-1);
	for ($fil=0; $fil<count($arreglo); $fil++) $arreglo[$fil][$coluAzar] = 'x';
	for ($col=0; $col<count($arreglo[0]); $col++) $arreglo[$filaAzar][$col] = 'x';
	$arreglo[$filaAzar][$coluAzar] = 'T';
	return $arreglo;
}

/* Función genérica para crear arreglos bidimensionales
   con el número de filas y columnas dado y llena cada celda
   de un valor */
function GeneraArregloBidimensional($filas, $columnas, $valor) {
  $arreglo = array();
  for ($fila=0; $fila < $filas; $fila++) {
		$arreglo[$fila] = array();
		for ($columna=0; $columna<$columnas; $columna++)
			$arreglo[$fila][$columna]=$valor;
	}
  return $arreglo;
}

//Función genérica para imprimir un arreglo bidimensional
function ImprimeArregloBidimensional($arreglo){
	for ($fila=0; $fila < count($arreglo); $fila++){
		echo "<br>";
		for ($columna=0; $columna < count($arreglo[$fila]); $columna++)
			echo $arreglo[$fila][$columna];
	}
}
