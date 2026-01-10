<?php
/* Crear un tablero de ajedrez de 8*8, poner en una posición al 
   azar un alfil y mostrar su ataque */
$tabla = GeneraArregloBidimensional(8, 8, '.');
$tabla = PoneAlfilAzar($tabla);
ImprimeArregloBidimensional($tabla);

//Pone un rey al azar y muestra su ataque
function PoneAlfilAzar($arreglo){
	$filaAzar = rand(0, count($arreglo)-1);
	$coluAzar = rand(0, count($arreglo[0])-1);
	$tmpFil=$filaAzar;
	$tmpCol=$coluAzar;
	while($tmpFil>=0 && $tmpCol>=0) { $arreglo[$tmpFil][$tmpCol]='x'; $tmpFil--; $tmpCol--; }
	$tmpFil=$filaAzar; $tmpCol=$coluAzar;
	while($tmpFil>=0 && $tmpCol<8)  { $arreglo[$tmpFil][$tmpCol]='x'; $tmpFil--; $tmpCol++; }
	$tmpFil=$filaAzar; $tmpCol=$coluAzar;
	while($tmpFil<8 && $tmpCol<8)   { $arreglo[$tmpFil][$tmpCol]='x'; $tmpFil++; $tmpCol++; }
	$tmpFil=$filaAzar; $tmpCol=$coluAzar;
	while($tmpFil<8 && $tmpCol>=0)  { $arreglo[$tmpFil][$tmpCol]='x'; $tmpFil++; $tmpCol--; }
	$arreglo[$filaAzar][$coluAzar] = 'A';
	return $arreglo;
}

/* Función genérica para crear $arreglos bidimensionales
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

//Función genérica para imprimir un $arreglo bidimensional
function ImprimeArregloBidimensional($arreglo){
	for ($fila=0; $fila < count($arreglo); $fila++){
		echo "<br>";
		for ($columna=0; $columna < count($arreglo[$fila]); $columna++)
			echo $arreglo[$fila][$columna];
	}
}
