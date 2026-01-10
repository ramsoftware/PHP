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
		echo "<br>Valor: "  . $this->valor;
	}
	
}

//Declara la lista que almacenará objetos Nodo
$Objetos = array();

//Adiciona elementos a la lista
array_push($Objetos, new Nodo(7, 'k', "prueba"));
array_push($Objetos, new Nodo(-9.4, 'r', "texto"));
array_push($Objetos, new Nodo(1.836, 's', "test"));
		
//Total
echo "<br>Total elementos: " . count($Objetos);
foreach($Objetos as $pasea){ $pasea->Imprime(); }

//Agrega un nodo al inicio de la lista
array_unshift($Objetos, new Nodo(55.5, 'x', "al inicio"));

//Total
echo "<br>Total elementos: " . count($Objetos);
foreach($Objetos as $pasea){ $pasea->Imprime(); }
