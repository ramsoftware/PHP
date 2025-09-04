<?php
class MiClase{
		public $valorA;
		public $valorB;
}

//Se instancia y se le dan unos valores a los atributos
$objeto = new MiClase();
$objeto->valorA = "Hola mundo";
$objeto->valorB = 3.14159265;

//Se crea un objeto nuevo y se copian los valores al nuevo objeto
$otro = clone($objeto);

//Se cambia un valor del objeto original
$objeto->valorB = 90123.7;

//Imprime el objeto original y el objeto copia
echo "Valores con el original son: " . $objeto->valorA . ", " . $objeto->valorB . "<br>";
echo "Valores con la copia son: " . $otro->valorA . ", " . $otro->valorB . "<br>";
