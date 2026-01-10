<?php 
//Tipo de triángulo
$ladoA = 17;
$ladoB = 18;
$ladoC = 19;
if ($ladoA==$ladoB && $ladoB==$ladoC){
	echo "Es equilátero";
}else if ($ladoA==$ladoB || $ladoB==$ladoC || $ladoA==$ladoC){
	echo "Es isósceles";
}else {
	echo "Es escaleno";
}
