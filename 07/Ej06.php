<?php
//Llama a función que genera arreglo bidimensional
$tabla = GeneraArregloBidimensional(10, 15, '.');

//Imprime la tabla		
ImprimeArregloBidimensional($tabla);


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
