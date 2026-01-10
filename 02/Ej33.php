<?php
//Ciclo do-while creciente. Sale cuando cont sea 50
$cont = 1;
do{	
	echo $cont . "<br>";
	$cont++;
	if ($cont>=50) break; //Sale del ciclo
}while ($cont<=100);
