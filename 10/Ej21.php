<?php
class MiClase{
	//Atributo puede ser accedido desde afuera
	public $valorA = 'público';
	
	//Atributo solo puede ser accedido por clases hijas
	protected $valorB = 'protegido';

	//Atributo que solo puede ser accedido por esta clase, nadie mas.
	private $valorC = 'privado';
}

class claseHija extends MiClase{
	public function Metodo(){
		echo $this->valorA . "<br>";
		echo $this->valorB . "<br>";		
		echo $this->valorC . "<br>"; //Dará error: undefined
	}
}

$probar = new claseHija();
$probar->Metodo();
