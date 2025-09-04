<?php
//Ciclo while creciente. Se salta los pares
$cont = 1;
while ($cont<=100){	
	$cont++;
	if ($cont%2==0) continue; //Salta a la siguiente iteración
	echo $cont . "<br>";
}
