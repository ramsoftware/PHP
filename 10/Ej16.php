<?php
//Una clase con métodos estáticos
class MiClase{
	public static function Imprimir(){
		echo "Hola Mundo<br><br>";
	}
	
	public static function Sumar($valA, $valB){
		return $valA + $valB;
	}
}

MiClase::Imprimir(); //No necesita instanciar, se usa directamente

$resultado = MiClase::Sumar(17, 50); //Uso directo sin instanciar
echo $resultado;
