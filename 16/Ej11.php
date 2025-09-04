<?php
class MiClase{
	public $valorPublico; //Un sólo atributo público
}

class OtraClase{
  public $objeto; //Atributo público
  public function unMetodo($valor){
		$this->objeto = new MiClase(); //Crea un objeto de tipo MiClase
		$this->objeto->valorPublico = $valor; //Da un valor a la propiedad de MiClase
	}
}

$probar = new OtraClase();
$probar->unMetodo(3.1415926537);
echo $probar->objeto->valorPublico; //Muestra el valor de la propiedad de MiClase
