<?php
//Retirar caracteres no permitidos de una cadena
$cadena = "Esto es una <b><big>prueba</big></b>";
$nueva = "";
for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
	$letra = mb_substr($cadena, $cont, 1, 'UTF-8');
	if (EsPermitido($letra)) $nueva .= $letra;
}

echo "Original: "  . $cadena . "<br>";
echo "Con los caracteres permitidos: " . $nueva . "<br>";

//Retorna true si el caracter está permitido
function EsPermitido($caracter){
	$permite = "ÁÉÍÓÚáéíóúäëïöü";
	$permite .= "abcdefghijklmnñopqrstuvwxyz";
	$permite .= "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	$permite .= " 1234567890";
	for ($cont=0; $cont < mb_strlen($permite, 'UTF-8'); $cont++){
		$letra = mb_substr($permite, $cont, 1, 'UTF-8');
		if ($caracter == $letra)
			return true;
	}
	return false;
}
