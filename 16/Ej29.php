<?php
//Clases y métodos abstractos
abstract class MiClase{
	//Este método obligatoriamente tiene que implementarse en la clase hija
	public abstract function operar();
	/* ¡OJO! Sólo clases abstractas pueden tener métodos abstractos */
}

//La clase hija no implementa el método abstracto dando como resultado un error
class claseHija extends MiClase{
	public function Imprimir($valorA, $valorB){
		echo "Hija, recibe: " . $valorA . ", ". $valorB . "<br>";
	}
}

$probar = new claseHija();
$probar->Imprimir(234, 678);
