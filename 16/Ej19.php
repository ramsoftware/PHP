<?php
class MiClase{
	public $valorA;
	public $valorB;
}
$objeto = new MiClase(); //Instancia la clase
$objeto->valorA = 11; 
$objeto->valorB = 222; 

$otro = new MiClase(); //Instancia otro objeto de la misma clase
$otro->valorA = 11;
$otro->valorB = 222;

if ($objeto == $otro)
	echo "objetos iguales";
else
	echo "objetos diferentes";
