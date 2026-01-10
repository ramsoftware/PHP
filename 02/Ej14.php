<?php 
/* Ciclo for con dos variables. Observemos las dos
   condiciones que deben darse cambiando && por || */
for ($x=1, $y=34; $x<=10 || $y>=28; $x++, $y--){	
	echo $x . ", " . $y . "<br>";
}
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
