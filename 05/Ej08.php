<?php
//Uso de caracteres de habla española
$cadena = "áéíóú";
echo "Cadena: [" . $cadena . "]<br>";
echo "Longitud calculada: " . strlen($cadena) . "<br>";
echo "Longitud codificada: " . mb_strlen($cadena, 'UTF-8') . "<br>";

echo "Recorriendo: ";
for ($cont=0; $cont<strlen($cadena); $cont++){
	$letra = $cadena[$cont];
	echo "[" . $letra . "] ";
}
