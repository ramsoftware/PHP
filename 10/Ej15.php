<?php
class MiClase{
	public $valorPublico; //Un sólo atributo público
}

class OtraClase{
  public function Imprimir(){
		echo "esto es una prueba";
	}
}

//Instancia una determinada clase
$objeto = new OtraClase();

//Si condicional para saber si un objeto es instancia de una determinada clase
if ($objeto instanceof MiClase)
	echo "objeto es instancia de MiClase";
else
	echo "objeto NO es instancia de MiClase";
