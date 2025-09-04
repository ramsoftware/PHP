<?php
//Ciclo do-while creciente. Se salta los pares
$cont = 1;
do{	
	$cont++;
	if ($cont%2==0) continue; //Salta a la siguiente iteración
	echo $cont . "<br>";
}while ($cont<=100);
