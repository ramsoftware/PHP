<?php 
//Si condicional. Uso de else if
$valA = 17;
$valB = 17;
if ($valA > $valB){
	echo $valA . " es mayor que " . $valB;
} else if ($valA == $valB){
	echo $valA . " es igual que " . $valB;
}
else {
	echo $valA . " es menor que " . $valB;
}
