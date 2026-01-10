<?php 
//Cifrador sencillo con clave de cifrado
$cadena = "Esta es una prueba de cifrado con clave";
$clave = "sesamo";

$cifrada = Cifrar($cadena, $clave);
echo "Original: "  . $cadena . "<br>";
echo "Cifrado: " . $cifrada . "<br>";

$descifra = DesCifrar($cifrada, $clave);
echo "Descifrado: " . $descifra . "<br>";

function Cifrar($cadena, $clave){
	$cifrada = "";
	$clavecont = 0;
	for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
		//Cada letra de la clave genera un desplazamiento  
		$desplaza = ord(mb_substr($clave, $clavecont, 1, 'UTF-8'))%20;
		$clavecont++;
		if ($clavecont >= mb_strlen($clave, 'UTF-8')) $clavecont = 0; //Si se llega al final de la clave
		$num = ord(mb_substr($cadena, $cont, 1, 'UTF-8')); //Trae el valor ASCII de la letra
		$num += $desplaza;
		$cifrada .= chr($num);
	}
	return $cifrada;
}

function DesCifrar($cadena, $clave){
	$cifrada = "";
	$clavecont = 0;
	for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
		//Cada letra de la clave genera un desplazamiento  
		$desplaza = ord(mb_substr($clave, $clavecont, 1, 'UTF-8'))%20;
		$clavecont++;
		if ($clavecont >= mb_strlen($clave, 'UTF-8')) $clavecont = 0; //Si se llega al final de la clave
		$num = ord(mb_substr($cadena, $cont, 1, 'UTF-8')); //Trae el valor ASCII de la letra
		$num -= $desplaza;
		$cifrada .= chr($num);
	}
	return $cifrada;
}
