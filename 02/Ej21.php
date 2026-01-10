<?php 
/* Ciclo while con dos variables. Observemos las dos
   condiciones que deben darse */
$x=1;
$y=34;
while ($x<=10 && $y>=28){	
	echo $x . ", " . $y . "<br>";
	$x++;
	$y--;
}
/* Resultado:
1, 34
2, 33
3, 32
4, 31
5, 30
6, 29
7, 28
*/
