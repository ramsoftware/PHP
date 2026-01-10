<?php 
$valores = array();
array_push($valores, 15000);
array_push($valores, 18000);
array_push($valores, 34000);
array_push($valores, 17000);
array_push($valores, 8000);

$mayor = $valores[0]; //Inicia con el primer elemento como el mayor
for ($cont=0; $cont < count($valores); $cont++){
	if ($valores[$cont] > $mayor) $mayor = $valores[$cont];
}
			
echo "Mayor es: " . $mayor;
