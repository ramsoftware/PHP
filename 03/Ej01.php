<?php
$numEntero = 13; //Tipo entero
$Primo = EsPrimo($numEntero); //Llama la función
if ($Primo)
	echo $numEntero . " es primo<br>";
else
	echo $numEntero . " NO es primo<br>";
	

//Función que retorna true si el número enviado por parámetro es primo
function EsPrimo($num){
	if ($num<=1) return false;
	if ($num==2) return true;
	if ($num%2==0) return false;
	for ($divide = 3; $divide <= sqrt($num); $divide+=2)
		if ($num%$divide == 0) return false;
	return true;
}
