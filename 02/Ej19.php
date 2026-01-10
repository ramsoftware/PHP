<?php 
//Ciclo while creciente aumentando el doble del anterior
$cont = 1;
while ($cont<=5000){	
	echo $cont . ", ";
	$cont*=2;
}
//Resultado:1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096
