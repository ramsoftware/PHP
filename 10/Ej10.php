<?php
class MiClase{
	public $valorA;
	public $valorB;
	public $valorC;
	//Constructor con parámetros con valores por defecto
	public function __construct($valA, $valB='Pez Espada', $valC='Sardina'){
		$this->valorA = $valA;
		$this->valorB = $valB;
		$this->valorC = $valC;
	}
	public function Imprime(){
		echo $this->valorA . " .. " . $this->valorB . " .. " . $this->valorC . "<br>";
	}
}

$probar = new MiClase('Bagre', 'Delfín');
$probar->Imprime();
