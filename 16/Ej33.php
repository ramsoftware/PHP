<?php
//Cada ítem de la lista será Nodo
class Nodo {
	private $valor;
	private $letra;
	private $cadena;
	
	function __construct($valor, $letra, $cadena){
		$this->valor = $valor;
		$this->letra = $letra;
		$this->cadena = $cadena;
	}
	
	function Imprime(){
		echo "Valor: " . $this->valor . " caracter: " . $this->letra . " cadena: " . $this->cadena . "<br>";
	}
	
	function setCadena($cadena) {
		$this->cadena = $cadena;
	}
}

//Declara la lista que almacenará objetos Nodo
$Objetos = array();

//Adiciona elementos a la lista
array_push($Objetos, new Nodo(7, 'k', "prueba"));
array_push($Objetos, new Nodo(-9.4, 'r', "texto"));
array_push($Objetos, new Nodo(1.836, 's', "test"));
		
//Llama objeto directamente de la lista
$Objetos[0]->Imprime();

//Cambia el valor
$Objetos[0]->setCadena("zzzzzzzzzzzzzzzzzz");
$Objetos[0]->Imprime();
