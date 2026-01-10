<?php
//Cada ítem del arbol binario será Nodo
class Nodo {
	public $valor;
	public $izquierda;
	public $derecha;
	
	function __construct($valor, $izquierda, $derecha){
		$this->valor = $valor;
		$this->izquierda = $izquierda;
		$this->derecha = $derecha;
	}
}

//Se genera el árbol binario
$Nodo1 = new Nodo(1, null, null);
$Nodo2 = new Nodo(2, null, null);
$Nodo3 = new Nodo(3, null, null);
$Nodo4 = new Nodo(4, null, null);
$Nodo5 = new Nodo(5, $Nodo1, $Nodo2);
$Nodo6 = new Nodo(6, $Nodo3, $Nodo4);
$Nodo7 = new Nodo(7, $Nodo5, $Nodo6);

//Lo recorre en preorden
preorden($Nodo7); //7,5,1,2,6,3,4

function preorden($nodo){
	if ($nodo==null) return;
	echo " , " . $nodo->valor;
	preorden($nodo->izquierda);
	preorden($nodo->derecha);
}
