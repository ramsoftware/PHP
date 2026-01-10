<?php
//Define una clase
class MiClase{
	//Propiedades
	public $valorPublico; //Acceso público
	private $datoPrivado; //Acceso privado
}

$instancia = new MiClase(); //Instancia la clase
$instancia->valorPublico = 17; //Se puede hacer por ser pública
echo $instancia->valorPublico . "<br>";

//Estas instrucciones fallarían
$instancia->datoPrivado = 1235; //NO se puede acceder directamente a una propiedad privada
echo $instancia->datoPrivado;
