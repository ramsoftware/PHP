<?php 
$arreglo = [32,17,-73,24,85,96,37,18,59,6];

sort($arreglo); //Ordena de menor a mayor
$nuevo = array_reverse($arreglo); //Invierte el arreglo

foreach ($nuevo as $valor){
	echo $valor . ", ";
}
