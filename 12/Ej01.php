<?php 
class Nodo {
	public $valor;
	public $letra;
	public $cadena;
	
	function __construct($valor, $letra, $cadena){
		$this->valor = $valor;
		$this->letra = $letra;
		$this->cadena = $cadena;
	}
}

//Instancia 
$objeto = new Nodo(7, 'k', "prueba");

//Codifica en JSON
$codificado = json_encode($objeto);

//Imprime
echo $codificado;
