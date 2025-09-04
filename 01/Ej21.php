<?php 
//Área y volumen del cilindro
$radio = 8;
$altura = 12;
$area = 2 * M_PI * $radio * ($altura + $radio);
$volumen = M_PI * $radio * $radio * $altura;
echo "Área es: " . $area;
echo "<br>Volumen es: " . $volumen; 
