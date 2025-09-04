<?php
class MiClase{
  public function __construct($valorA, $valorB){
		echo "Padre, recibe: " . $valorA . ", ". $valorB . "<br>";
	}
}

class claseHija extends MiClase{
  public function __construct($valorA, $valorB){
		echo "Hija, recibe: " . $valorA . ", ". $valorB . "<br>";
	}
}

//¿Qué constructor se ejecuta?
$probar = new claseHija(56, 78);
