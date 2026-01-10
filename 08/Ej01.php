<?php 
//Funciones que reciben distinto número de parámetros
UnaFuncion();
UnaFuncion("esto", "es", "una", "prueba");
UnaFuncion(1,2,3,4,5,6,7,8,9);
UnaFuncion("palabra", 5, "texto", 7, 8.56);

function UnaFuncion(){
	//total parámetros
	$numParametros = func_num_args();
	echo "Total parámetros:" . $numParametros . "<br>";
}
