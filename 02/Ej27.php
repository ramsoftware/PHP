<?php
//Ciclo while creciente aumentando el doble del anterior
$cont = 1;
do{	
	echo $cont . ", ";
	$cont*=2;
}while ($cont<=5000);
//Resultado:1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096
