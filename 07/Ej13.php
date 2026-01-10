<?php
/* Hacer un algoritmo que ponga los 5 barcos
   al azar en el tablero del juego de batalla naval */

//Crear el tablero del juego
$tableroJuego = inicializaTablero(14, 10); 

//Poner cada barco: arreglo, tipo barco, número de huecos
$tableroJuego = poneBarco($tableroJuego, 'P', 5);
$tableroJuego = poneBarco($tableroJuego, 'G', 4);
$tableroJuego = poneBarco($tableroJuego, 'C', 3);
$tableroJuego = poneBarco($tableroJuego, 'S', 3);
$tableroJuego = poneBarco($tableroJuego, 'D', 2);
ImprimeArregloBidimensional($tableroJuego);

//Genera el tablero
function inicializaTablero($filas, $columnas){ 
  $tablero = array();
	for ($fila=0; $fila<$filas; $fila++){
		$tablero[$fila] = array();
		for ($columna=0; $columna<$columnas; $columna++)
			$tablero[$fila][$columna]='.';
	}
	return $tablero;
}

//Función genérica para imprimir un arreglo bidimensional
function ImprimeArregloBidimensional($arreglo){
	for ($fila=0; $fila < count($arreglo); $fila++){
		echo "<br>";
		for ($columna=0; $columna < count($arreglo[$fila]); $columna++)
			echo $arreglo[$fila][$columna] . " ";
	}
}

//Pone el barco en una posición al azar
function poneBarco($tablero, $simbolo, $huecos){
	do{
		/* ¿Vertical u horizontal?
  		   0 es vertical, 1 es horizontal */
		$orienta = rand(0,1);
		
		$fil = rand(0, count($tablero)-1);
		$col = rand(0, count($tablero[0])-1);
		$posValida = true; //La posición del barco es válida
		
		//Chequea si no se sale del tablero
		if ($fil+$huecos >= count($tablero) && $orienta==0)
			$posValida=false; //La posición del barco es inválida
		else if ($col+$huecos >= count($tablero[0]) && $orienta==1)
			$posValida=false; //La posición del barco es inválida
		else {	//Chequea si ya ha sido ocupada esa parte
			if ($orienta==0)
				for($cont=0; $cont<$huecos; $cont++){
					if ($tablero[$fil+$cont][$col]!='.')
						$posValida=false;
				}
			else
				for($cont=0; $cont<$huecos; $cont++){
					if ($tablero[$fil][$col+$cont]!='.')
						$posValida=false;
				}
		}
	}while($posValida==false);
	
	if ($orienta==0)
		for($cont=0; $cont<$huecos; $cont++)
			$tablero[$fil+$cont][$col]=$simbolo;
	else
		for($cont=0; $cont<$huecos; $cont++)
			$tablero[$fil][$col+$cont]=$simbolo;
		
	return $tablero;
}
