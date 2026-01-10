<?php 
//Suma dos números enteros positivos almacenados en cadenas. Como son solo números dentro de strings
//se hace uso de las funciones genéricas de cadena (no es necesario UTF-8)
$numeroA = "395763487398655335"; //Primer número
$numeroB = "888888888888888888"; //Segundo número
$resultado = ""; //Guarda el resultado
$ultimaPosA = strlen($numeroA)-1; //Posición del último digito del primer número
$ultimaPosB = strlen($numeroB)-1;
$llevar = false; //Se activa si la suma de digitos es 10 o mas
while($ultimaPosA>=0 || $ultimaPosB>=0){ //Suma del digito menos significativo al más significativo
	$suma = 0; //Suma de digitos
	if ($ultimaPosA>=0 && $ultimaPosB>=0){ //Si ambos digitos existen en esas posiciones
		$suma = intval($numeroA[$ultimaPosA]) + intval($numeroB[$ultimaPosB]);
	}
	else if ($ultimaPosA>=0){ //Si sólo existe digito en primer número
		$suma = intval($numeroA[$ultimaPosA]);
	}
	else { //solo existe digito en segundo numero
		$suma = intval($numeroB[$ultimaPosB]);
	}
	if ($llevar==true) $suma++; //Si llevaba aumenta en 1 la suma
	$llevar = false; //La bandera de llevar se apaga
	if ($suma>=10){ $llevar=true; $suma-=10; } //Si la suma es 10 o más, entonces lleva, le quita 10 
	$resultado = $suma . $resultado; //Agrega al inicio de la cadena
	$ultimaPosA--; //Va hacia la izquierda del primer número
	$ultimaPosB--; //Va hacia la izquierda del segundo número
}
if ($llevar==true) $resultado = "1" . $resultado; //Si la suma de los primeros digitos es 10 o más
echo $numeroA . " + <br>" . $numeroB . "<br>-------------------------<br>" . $resultado;
