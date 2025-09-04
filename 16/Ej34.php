<?php
//Este código fallará
class MiClase {
	function MetodoA(){
		document.write("<br>Llama al método A con cero parámetros");
	}
	function MetodoA($param1, $param2){
		document.write("<br>Llama al método A con dos parámetros");
	}
	function MetodoA($param1){
		document.write("<br>Llama al método A con un parámetro");
	}
	function MetodoA($param1, $param2, $param3){
		document.write("<br>Llama al método A con tres parámetros: " + $param1 + ", " + $param2 + ", " + $param3);
	}
}

$prueba = new MiClase();
$prueba->MetodoA();
$prueba->MetodoA(2, 7);
$prueba->MetodoA(8);
$prueba->MetodoA(5, 9, 3);
