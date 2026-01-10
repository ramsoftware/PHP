<?php
class MiClase{
	public $valorPublico; //Acceso público
}

$instancia = new MiClase(); //Instancia la clase
$instancia->valorPublico = 17;

//¡OJO! Refiere a la misma instancia
$otravariable = $instancia;


echo "otravariable: " . $otravariable->valorPublico . "<br>";
echo "instancia: " . $instancia->valorPublico . "<br>";
