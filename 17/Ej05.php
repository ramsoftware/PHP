<?php
//Cada ítem del arbol binario será Nodo
class Nodo {
	public $valor;
	public $izquierdo;
	public $derecho;
	
	function __construct($valor, $izquierdo, $derecho){
		$this->valor = $valor;
		$this->izquierdo = $izquierdo;
		$this->derecho = $derecho;
	}
}

//Un arreglo con valores no ordenados
$arreglo = [ 15, 21, 17, 32, 48, 13, 29, 44, 19, 16, 3, -1, 9, 0];

//Genera el árbol binario
$NodoRaiz = new Nodo($arreglo[0], null, null);	
for($cont=1; $cont<count($arreglo); $cont++){
	$pasea = $NodoRaiz;
	while ($pasea!=null){
		if ($arreglo[$cont] < $pasea->valor){ //Pone valor en la rama izquierda
			if ($pasea->izquierdo!==null)
				$pasea = $pasea->izquierdo;
			else{ //Crea nodo con el nuevo valor
				$pasea->izquierdo = new Nodo($arreglo[$cont], null, null);
				break;
			}
		}
		else{ //Pone valor en la rama derecha
			if ($pasea->derecho!=null)
				$pasea = $pasea->derecho;
			else{ //Crea nodo con el nuevo valor
				$pasea->derecho = new Nodo($arreglo[$cont], null, null);
				break;
			}
		}
	} //Cierra el while que navega por el árbol binario
} //Cierra el for que pasea por todo el arreglo unidimensional no ordenado

//Recorre en in-orden el árbol binario y los datos están ordenados
inorden($NodoRaiz);


function inorden($nodo){
	if ($nodo==null) return;
	inorden($nodo->izquierdo);
	echo " , " . $nodo->valor;
	inorden($nodo->derecho);
}
