<?php
/* Crear un tablero de ajedrez de 8*8, poner en una posición al 
   azar un Rey y mostrar su ataque */
$tabla = GeneraArregloBidimensional(8, 8, '.');
$tabla = PoneReyAzar($tabla);
ImprimeArregloBidimensional($tabla);

//Pone un rey al azar y muestra su ataque
function PoneReyAzar($arreglo){
	$filaAzar = rand(0, count($arreglo)-1);
	$coluAzar = rand(0, count($arreglo[0])-1);
	if ($filaAzar>0) $arreglo[$filaAzar-1][$coluAzar]='x';
	if ($filaAzar>0 && $coluAzar>0) $arreglo[$filaAzar-1][$coluAzar-1]='x';
	if ($coluAzar>0) $arreglo[$filaAzar][$coluAzar-1]='x';
	if ($coluAzar<count($arreglo[0])-1) $arreglo[$filaAzar][$coluAzar+1]='x';
	if ($filaAzar>0 && $coluAzar<count($arreglo[0])-1) $arreglo[$filaAzar-1][$coluAzar+1]='x';
	if ($filaAzar<count($arreglo)-1 && $coluAzar<count($arreglo[0])-1) $arreglo[$filaAzar+1][$coluAzar+1]='x';
	if ($filaAzar<count($arreglo)-1) $arreglo[$filaAzar+1][$coluAzar]='x';
	if ($filaAzar<count($arreglo)-1 && $coluAzar>0) $arreglo[$filaAzar+1][$coluAzar-1]='x';
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
