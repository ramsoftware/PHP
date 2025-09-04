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

$NodoRaiz = new Nodo(1, null, null); //Nodo raíz
$NodoIzq = new Nodo(2, null, null); //Rama izquierda
$NodoDer = new Nodo(3, null, null); //Rama derecha

//El nodo raíz conecta a la izquierda y derecha
$NodoRaiz->izquierdo = $NodoIzq;
$NodoRaiz->derecho = $NodoDer;

//Imprime los valores del árbol
echo $NodoRaiz->valor . "<br>";
echo $NodoRaiz->izquierdo->valor . "<br>";
echo $NodoRaiz->derecho->valor . "<br>";
