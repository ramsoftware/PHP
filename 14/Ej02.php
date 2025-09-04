<?php 
//Funciones que reciben distinto número de parámetros
UnaFuncion("paso", "varios", "argumentos", 7, 1, "numeros", 3, "y texto");

function UnaFuncion(){
	//total parámetros
	$ListadoParametros = func_get_args();
	
	for ($cont=0; $cont < count($ListadoParametros); $cont++)
		echo $ListadoParametros[$cont] . "<br>";
}
