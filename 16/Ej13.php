<?php
class MiClase{
	public $valorPublico; //Un sólo atributo público
}

//Esta función recibe un objeto como parámetro
function Imprimir($objeto_instanciado){
	echo $objeto_instanciado->valorPublico;
}

$probar = new MiClase();
$probar->valorPublico = "Esta es una prueba...";
Imprimir($probar); //Envía la instancia como parámetro
