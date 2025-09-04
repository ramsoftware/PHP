<?php
//Números aleatorios
$numero = mt_rand(); //Un número entero entre 0 y mt_getrandmax() incluído
echo $numero . "<br>";

echo "Máximo aleatorio: ";
echo  mt_getrandmax();
