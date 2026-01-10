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
}

//Declara la lista que almacenará objetos Nodo
$Objetos = array();

//Adiciona elementos a la lista
$Objetos[] = new Nodo(7, 'k', "prueba");
$Objetos[] = new Nodo(-9.4, 'r', "texto");
$Objetos[] = new Nodo(1.836, 's', "test");
		
//Trae un elemento. ¡OJO! Es una referencia (como un acceso directo)
$tmp = $Objetos[1];
$tmp->Imprime();

//Llama objeto directamente de la lista
$Objetos[0]->Imprime();
