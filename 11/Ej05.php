<?php 
//Cifrador sencillo
$cadena = "Esta es una prueba de cifrado";
$cifrada = Cifrar($cadena);
echo "Original: " . $cadena . "<br>";
echo "Cifrado: " . $cifrada . "<br>";

$descifra = DesCifrar($cifrada);
echo "Descifrado: " . $descifra . "<br>";

//Cifra la cadena moviendo un caracter hacia adelante
function Cifrar($cadena){
	$cifrada = "";
	for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
		$num = ord(mb_substr($cadena, $cont, 1, 'UTF-8')); //Trae el valor ASCII de la letra
		$num++; //Incrementa en uno ese valor
		$cifrada .= chr($num); //Convierte el valor a su respectivo caracter
	}
	return $cifrada;
}

//DesCifra la cadena cifrada moviendo un caracter hacia atrás
function DesCifrar($cadena){
	$descifrada = "";
	for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
		$num = ord(mb_substr($cadena, $cont, 1, 'UTF-8')); //Trae el valor ASCII de la letra
		$num--; //Incrementa en uno ese valor
		$descifrada .= chr($num); //Convierte el valor a su respectivo caracter
	}
	return $descifrada;
}
