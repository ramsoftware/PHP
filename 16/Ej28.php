<?php
//Clases y métodos abstractos
abstract class MiClase{
	//Este método obligatoriamente tiene que implementarse en la clase hija
	public abstract function operar();
	/* ¡OJO! Sólo clases abstractas pueden tener métodos abstractos */
}

class claseHija extends MiClase{
	public function Imprimir($valorA, $valorB){
		echo "Hija, recibe: " . $valorA . ", ". $valorB . "<br>";
	}
	
	//Aquí se implementa el método abstracto de la clase padre
	public function operar(){
		echo "método implementado obligatoriamente en la clase hija";
	}
}

$probar = new claseHija();
$probar->Imprimir(234, 678);
$probar->operar();
