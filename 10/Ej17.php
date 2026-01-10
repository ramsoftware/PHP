<?php
class MiClase{
	public $valorA;
	public $valorB;
	public $valorC;
}

//Instancia la clase y le da unos valores a los atributos
$objeto = new MiClase();
$objeto->valorA = 11; 
$objeto->valorB = "esta es una prueba"; 
$objeto->valorC = 3333; 

//Convierte el objeto en una cadena
$cadena = serialize($objeto);
echo $cadena;

//Crea una nueva instancia sin valores
$otro = new MiClase();

//Toma la cadena de la anterior instancia y la convierte a valores del objeto nuevo
$otro = unserialize($cadena);
echo '<br>' . $otro->valorB;
