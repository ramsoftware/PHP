<?php
//Ciclo while creciente. Sale cuando cont sea 50
$cont = 1;
while ($cont<=100){	
	echo $cont . "<br>";
	$cont++;
	if ($cont>=50) break; //Sale del ciclo
}
