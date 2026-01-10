<?php
//Chequea si un número es correcto
$numero = acos(15); //Arcoseno de 15 es erróneo
if (is_nan($numero))
	echo "No es un número";
else
	echo "Número es: " . $numero;
