<?php
/* Ciclo do-while con dos variables. Observemos las dos
   condiciones que deben darse cambiando && por || */
$x=1;
$y=34;
do{	
	echo $x . ", " . $y . "<br>";
	$x++;
	$y--;
}while ($x<=10 || $y>=28);
/* Resultado:
1, 34
2, 33
3, 32
4, 31
5, 30
6, 29
7, 28
8, 27
9, 26
10, 25
*/
