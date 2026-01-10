<?php
//Quita espacios
$cadena = "   Rafael  Moreno  áéíóúÑñ  ¿?   !¡ ÁÉÍÓÚÄËÏÖÜäëïöü  Parra ";
$nueva = "";
for ($cont=0; $cont<mb_strlen($cadena, 'UTF-8'); $cont++){
	$letra = mb_substr($cadena, $cont, 1, 'UTF-8');
	if ($letra != ' ')	
		$nueva .=  $letra;
}

echo "Original: "  . $cadena . "<br>";
echo "Sin espacios: "  . $nueva . "<br>";
