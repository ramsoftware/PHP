<?php
//El script puede tardar un buen tiempo
ini_set('max_execution_time', 300); //300 segundos = 5 minutos

$sudoku = /* El Sudoku como es planteado. Los ceros(0) son las casillas vacías a completar */
  [ [ 5, 3, 0, 0, 7, 0, 0, 0, 0],
	[ 6, 0, 0, 1, 9, 5, 0, 0, 0],
	[ 0, 9, 8, 0, 0, 0, 0, 6, 0],
	[ 8, 0, 0, 0, 6, 0, 0, 0, 3],
	[ 4, 0, 0, 8, 0, 3, 0, 0, 1],
	[ 7, 0, 0, 0, 2, 0, 0, 0, 6],
	[ 0, 6, 0, 0, 0, 0, 2, 8, 0],
	[ 0, 0, 0, 4, 1, 9, 0, 0, 5],
	[ 0, 0, 0, 0, 8, 0, 0, 7, 9]
  ];
  
ImprimeArregloBidimensional($sudoku);
  
$finalizo=false; /* Mantiene el ciclo hasta que resuelva el Sudoku */
$ciclos=0;   /* Lleva el número de iteraciones */

$solucion = array(); /* Tablero en el que se trabaja */
for ($fila=0; $fila<9; $fila++){
	$solucion[$fila] = array();
	for ($columna=0; $columna<9; $columna++)
		$solucion[$fila][$columna]=0;
}
$DESTRUYE = 700;   /* Cada cuantos ciclos borra números para destrabar */

/* Ciclo que llenará el sudoku completamente */
do{   
	for ($fila=0; $fila<9; $fila++){	/* Se copia el sudoku sobre el tablero a evaluar */
		for ($columna=0; $columna<9; $columna++)
			if ($sudoku[$fila][$columna] != 0) $solucion[$fila][$columna] = $sudoku[$fila][$columna];
	}

	$numValido=true;
	do { /* Busca un número al azar para colocar en alguna celda */
		$posX = rand(0,8);	 /* Una posición X de 0 a 8 */
		$posY = rand(0,8);	 /* Una posición Y de 0 a 8 */
		$numero = rand(1,9);	 /* Un número al azar de 1 a 9 */
		$numValido=true;	 /* Chequea si el número no se repite ni vertical ni horizontalmente */
		for ($cont=0; $cont<9; $cont++) if ($solucion[$cont][$posY]==$numero || $solucion[$posX][$cont]==$numero) $numValido=false;
		if ($numValido) $solucion[$posX][$posY]=$numero; /* Si el número no se repite entonces lo coloca en el tablero */
	}while(!$numValido);

	/* Chequea que NO se viole la regla de que cada uno de los 9 cuadros internos no repita número */
	for ($cuadroX=0; $cuadroX<=6; $cuadroX+=3)
		for ($cuadroY=0; $cuadroY<=6; $cuadroY+=3){
			$numRepite=0;
			for ($valor=1; $valor<=9; $valor++){
				$numRepite=0;
				for ($posX=0; $posX<3; $posX++)
					for ($posY=0; $posY<3; $posY++){
						if ($solucion[$cuadroX+$posX][$cuadroY+$posY]==$valor) $numRepite++;
						if ($numRepite>1) break;
					}

				if ($numRepite>1) /* Si detecta repetición, entonces borra todos los números repetidos */
					for ($posX=0; $posX<3; $posX++)
						for ($posY=0; $posY<3; $posY++)
						if ($solucion[$cuadroX+$posX][$cuadroY+$posY]==$valor) $solucion[$cuadroX+$posX][$cuadroY+$posY]=0;
			}
		}

	$finalizo=true; /* Chequea si se completó el sudoku completamente */
	for ($posX=0; $posX<9; $posX++)
		for ($posY=0; $posY<9; $posY++)
			if ($solucion[$posX][$posY]==0) $finalizo=false;
		
	$ciclos++; /* Cada ciertos ciclos para destrabar, borra la tercera parte de lo completado */
	if ($ciclos%$DESTRUYE==0)
		for ($posX=0; $posX<9; $posX++)
			for ($posY=0; $posY<9; $posY++)
				if ( rand(0,2) == 0) $solucion[$posX][$posY]=0;
			
}while (!$finalizo);

echo "<p style='font-family:courier new;'>";
echo "Ciclos totales: " . $ciclos . "</p>";
ImprimeArregloBidimensional($solucion);


//Función genérica para imprimir un $arreglo bidimensional
function ImprimeArregloBidimensional($arreglo){
	for ($fila=0; $fila < count($arreglo); $fila++){
		echo "<br>";
		for ($columna=0; $columna < count($arreglo[$fila]); $columna++)
			echo $arreglo[$fila][$columna] . " ";
	}
}
