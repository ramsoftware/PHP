<?php
try{
	$valorA = 15;
	$valorB = 0;
	$valorC = Divide($valorA, $valorB);
	echo "Resultado es: " . $valorC. "<br>";
}catch(Exception $unerror){
	echo 'Error capturado: '.  $unerror->getMessage(). "<br>";
}
echo "Finaliza";

//Función que divide
function Divide($valA, $valB){
	if ($valB==0) throw new Exception("División entre cero");
	$valC = $valA / $valB;
	return $valC;
}
