<?php
//Ciclo while decreciente disminuyendo la mitad del anterior
$cont = 4096;
do{	
	echo $cont . ", ";
	$cont/=2;
}while ($cont>=1);
//Resultado: 4096, 2048, 1024, 512, 256, 128, 64, 32, 16, 8, 4, 2, 1,
