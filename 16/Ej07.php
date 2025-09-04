<?php
class MiClase{
	public $valorpublico;
	
	//Constructor con parámetros
	function __construct($valor){
		$this->valorpublico = $valor;
	}
}

//Se instancia la clase con un valor
$objeto = new MiClase("hola mundo");
echo $objeto->valorpublico;
