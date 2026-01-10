<?php
//Ciclo for creciente, se salta los pares
for ($cont = 1; $cont<=10; $cont++){
	//Si es par, salta a la siguiente iteración
	if ($cont%2==0) continue;
	echo $cont . ", ";
}
//Resultado: 1, 3, 5, 7, 9,
