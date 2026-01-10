<?php
class MiClase{
	public $valorPublico; //Acceso público
}

$instancia = new MiClase(); //Instancia la clase
$instancia->valorPublico = 17;

//¡OJO! son diferentes instancias
$otravariable = new $instancia;
$otravariable->valorPublico = 2853;

echo "otravariable: " . $otravariable->valorPublico . "<br>";
echo "instancia: " . $instancia->valorPublico . "<br>";
