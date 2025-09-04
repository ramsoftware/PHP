<?php 
$valores = array();
array_push($valores, 15000);
array_push($valores, 18000);
array_push($valores, 34000);
array_push($valores, 17000);
array_push($valores, 8000);

//Operación con vectores: acumulado
$acumula = 0;
for ($cont=0; $cont < count($valores); $cont++){
	$acumula += $valores[$cont];
}
		
echo "Acumulado es: " . $acumula;
