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

//Instancia
$probar = new OtraClase();
$probar->unMetodo(3.1415926537);

//Convierte el objeto a una cadena
$cadena = serialize($probar);
echo $cadena . "<br><br>";

//Crea una nueva instancia
$nuevo = new OtraClase();
$nuevo = unserialize($cadena);
echo $nuevo->objeto->valorPublico;
