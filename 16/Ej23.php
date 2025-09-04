<?php
//Clase padre
class MiClase{
	//El método Imprimir en el padre
	public function Imprimir(){
		echo "Texto de la clase padre<br>";
	}
}

//Clase hija
class claseHija extends MiClase{
	//El metodo Imprimir en la clase hija
	public function Imprimir(){
		echo "Imprime de la clase hija<br>";
		parent::Imprimir(); //Llama al método de la clase padre
	}
}

//Instancia la clase hija
$probar = new claseHija();

/* Llama al método Imprimir
¿Cuál de ellos? El del padre, el de la hija, los dos
o dará un mensaje de error */
$probar->Imprimir();
