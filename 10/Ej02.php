<?php
class MiClase{
	private $datoPrivado; //Acceso privado
	public function PonerDato($valor){
		$this->datoPrivado = $valor;
	}
	public function DevolverDato(){
		return $this->datoPrivado;
	}
}

$instancia = new MiClase(); //Instancia la clase
$instancia->PonerDato(1235); //Llama al método público
echo $instancia->DevolverDato(); //Llama al otro método público
