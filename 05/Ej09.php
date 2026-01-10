<?php
//Uso de caracteres de habla española
$cadena = "áéíóú";
echo "Cadena: [" . $cadena . "]<br>";
echo "Longitud codificada: " . mb_strlen($cadena, 'UTF-8') . "<br>";

echo "Recorriendo: ";
for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
	$letra = mb_substr($cadena, $cont, 1, 'UTF-8');
	echo "[" . $letra . "] ";
}
