<?php 
//Tipo de triángulo
$ladoA = 17;
$ladoB = 18;
$ladoC = 19;
if ($ladoA==$ladoB && $ladoB==$ladoC){
	echo "Es equilátero";
}else if ($ladoA!=$ladoB && $ladoA!=$ladoC && $ladoB!=$ladoC){
	echo "Es escaleno";
}else {
	echo "Es isósceles";
}
