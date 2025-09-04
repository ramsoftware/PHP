<?php
/* Hay N ciudades a recorrer (0 a N-1). Sólo se puede visitar una ciudad por vez. 
   En la tabla aparece cuanto cuesta ir de una ciudad (origen) a otra ciudad (destino).
	¿Qué ruta tomar para visitar todas las ciudades con el mínimo costo? */

$ciudad = 20; //Número de ciudades
$minValor=15; //Valor mínimo que tendrá ir de una ciudad a otra
$maxValor=85; //Valor máximo que tendrá ir de una ciudad a otra

//Genera valores de viaje al azar
$valorviajes = inicializavalorviajes($ciudad, $minValor, $maxValor);

//Imprime los valores
ImprimeArregloBidimensional($valorviajes);

//Inicia con una ruta predeterminada 0, 1, 2, 3, .... N ... 0
$ruta = iniciaRuta($ciudad);

//Deduce el costo de esa ruta predeterminada
$costo = DeduceCosto($ruta, $valorviajes);

//Imprime 
echo "<br>" . CadenaRuta($ruta) . " Cuesta: $" . $costo;


//Usando el método Monte Carlo se buscarán otras rutas con menor costo
for($pruebas=1; $pruebas<=50000; $pruebas++){
	$dest1 = rand(0, count($ruta)-1);
	do{
		$dest2 = rand(0, count($ruta)-1);
	}while ($dest2==$dest1);
	$ruta = ModificaRuta($ruta, $dest1, $dest2);
	$costoNuevo = DeduceCosto($ruta, $valorviajes);
	if ($costoNuevo < $costo){
		$costo = $costoNuevo;
		echo "<br>" . CadenaRuta($ruta) . " Cuesta: $" . $costo;
	}
	else
		$ruta = ModificaRuta($ruta, $dest1, $dest2); //Dejar la ruta como antes
}

function CadenaRuta($ruta){
	$retorna = "Ruta: ";
	for ($cont=0; $cont<count($ruta); $cont++)
		$retorna .= $ruta[$cont] . ", ";
	return $retorna;
}

//Modifica la ruta de viaje
function ModificaRuta($ruta, $dest1, $dest2){
	$tmp = $ruta[$dest1];
	$ruta[$dest1]=$ruta[$dest2];
	$ruta[$dest2]=$tmp;
	return $ruta;
}

//Inicia el arreglo bidimensional de rutas
function iniciaRuta($limite){
	$ruta = array();
	for($cont=0; $cont<$limite; $cont++) array_push($ruta, $cont);
	return $ruta;
}

//Deduce el costo de la ruta de viaje
function DeduceCosto($ruta, $costos){ 
	$acum=0;
	for ($cont=0; $cont<count($ruta)-1; $cont++)
		$acum += $costos[$ruta[$cont]][$ruta[$cont+1]];
	return $acum;
}

//Llena de valores al azar la tabla de costos de viajes de una ciudad a otra
function inicializavalorviajes($ciudad, $minValor, $maxValor){ 
  $tablero = array();
	for ($fila=0; $fila<$ciudad; $fila++){
		$tablero[$fila] = array();
		for ($columna=0; $columna<$ciudad; $columna++)
			$tablero[$fila][$columna]=rand($minValor, $maxValor);
	}
	for ($cont=0; $cont<$ciudad; $cont++) $tablero[$cont][$cont]=0;
	return $tablero;
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
			echo $arreglo[$fila][$columna] . " ";
	}
}

