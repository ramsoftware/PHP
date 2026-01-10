<?php
$valA = 64;
$valB = 17;
echo "valores: " . $valA . " , " . $valB . "<br>";

//Para intercambiar los valores de esas variables se puede hacer uso de operadores de bit (XOR)
$valA^=$valB;
$valB^=$valA;
$valA^=$valB;
echo "valores: " . $valA . " , " . $valB . "<br>";
