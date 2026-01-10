<?php
//Clase padre
class MiClase{
	//Constructor con un sólo parámetro
	public function __construct($valor){
		echo "Padre, recibe: " . $valor . "<br>";
	}
}

//Clase hija
class claseHija extends MiClase{
	//Constructor con dos parámetros
	public function __construct($valorA, $valorB){
		echo "Hija, recibe: " . $valorA . ", ". $valorB . "<br>";
		
		//Llama al constructor del padre
		parent::__construct($valorA);
	}
}

//Instancia la clase hija
$probar = new claseHija(56, 78);
