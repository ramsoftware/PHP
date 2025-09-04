<?php
//Quita vocales
$cadena = "   Rafael  Moreno  áéíóúÑñ  ¿?   !¡ ÁÉÍÓÚÄËÏÖÜäëïöü  Parra ";
$nueva = "";
for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
	$letra = mb_substr($cadena, $cont, 1, 'UTF-8');
	if (!EsVocal($letra)) $nueva .=  $letra;
}

echo "Original: "  . $cadena . "<br>";
echo "Sin vocales: "  . $nueva . "<br>";

//Retorna true si el caracter es una vocal
function EsVocal($caracter){ 
	$vocales = "aeiouAEIOUÁÉÍÓÚáéíóúäëïöüÄËÏÖÜ";
	for ($cont=0; $cont < mb_strlen($vocales, 'UTF-8'); $cont++){
		$letra = mb_substr($vocales, $cont, 1, 'UTF-8');
		if ($caracter == $letra)
			return true;
	}
	return false;
}
