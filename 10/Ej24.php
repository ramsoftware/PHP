<?php
class MiClase{
  public function UnaFuncion($valor){
		echo "Padre, recibe: " . $valor . "<br>";
	}
}

class claseHija extends MiClase{
  public function UnaFuncion($valorA, $valorB){
		echo "Hija, recibe: " . $valorA . ", ". $valorB . "<br>";
	}
}

$probar = new claseHija();
$probar->UnaFuncion(56, 78); //Falla el llamado
