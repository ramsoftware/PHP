<?php
//Invierte la cadena
$cadena = "Rafael áéíóúÑñ¿?!¡ÁÉÍÓÚÄËÏÖÜäëïöü";
$nueva = "";
for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){ 
	$letra = mb_substr($cadena, $cont, 1, 'UTF-8');
	$nueva = $letra . $nueva;
}

echo "Original: "  . $cadena . "<br>";
echo "Invierte: "  . $nueva . "<br>";
