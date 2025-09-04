<?php
/* Crear un tablero de ajedrez de 8*8, poner en una posición al 
   azar una reina y mostrar su ataque */
$tabla = GeneraArregloBidimensional(8, 8, '.');
$tabla = PoneReinaAzar($tabla);
ImprimeArregloBidimensional($tabla);

//Pone una reina al azar y muestra su ataque
function PoneReinaAzar($arreglo){
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
	for ($tmpFil=0; $tmpFil<8; $tmpFil++) $arreglo[$tmpFil][$coluAzar]='x';
	for ($tmpCol=0; $tmpCol<8; $tmpCol++) $arreglo[$filaAzar][$tmpCol]='x';
	$arreglo[$filaAzar][$coluAzar] = 'R';
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
