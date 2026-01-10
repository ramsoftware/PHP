<?php
//Clase padre
class MiClase{
	public $valorPublico; //Acceso público
}

//Clase hija, hereda de la clase padre
class ClaseHija extends MiClase{ //Herencia
	public $propiedadhija;
}

//Instancia la clase hija
$objeto = new ClaseHija();

//Da valor a un atributo que se encuentra en la clase padre
$objeto->valorPublico = 888;

//Da valor a un atributo que se encuentra en la clase hija
$objeto->propiedadhija = 555;

//Imprime los valores de los atributos
echo $objeto->valorPublico . "<br>";
echo $objeto->propiedadhija . "<br>";
