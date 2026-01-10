<?php
//Clase abstracta. No se puede instanciar.
abstract class MiClase{
	public function operar($valorA, $valorB){
		echo "Padre, recibe: " . $valorA . ", ". $valorB . "<br>";
	}
}

//Si se puede heredar
class claseHija extends MiClase{
  public function Imprimir(){
		echo "Hola Mundo <br>";
	}
}

//Se puede hacer: instanciar la clase hija
$probar = new claseHija();
$probar->Imprimir();
$probar->operar(123, 678);

//Generará un error. No se puede instanciar.
$otro = new MiClase();
