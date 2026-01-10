<?php
class MiClase{
	public function Aviso(){
		echo "Método de MiClase";
	}
}

class OtraClase{
  public $objeto; //Atributo público
  public function unMetodo(){
		$this->objeto = new MiClase(); //Crea un objeto de tipo MiClase
	}
}

$probar = new OtraClase();
$probar->unMetodo();
echo $probar->objeto->Aviso(); //Llama al método de MiClase
