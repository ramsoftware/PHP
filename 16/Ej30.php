<?php
//Clase que no se puede heredar
final class MiClase{
	public function Imprimir(){
		echo "Texto de la clase padre";
	}
}

//Se intenta hacer herencia y genera un error
class claseHija extends MiClase{
	public function Imprimir(){
		echo "sobreescribo el método";
	}
}

$probar = new claseHija();
$probar->Imprimir();
