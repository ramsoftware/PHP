<?php
//Operaciones de bit
$valA = 2;
echo $valA . " en binario es: " . decbin($valA) . "<br>";

$valB = $valA << 1; //Multiplica por 2
echo $valB . " en binario es: " . decbin($valB) . "<br>";

$valC = $valA << 2; //Multiplica por 4
echo $valC . " en binario es: " . decbin($valC) . "<br>";

$valD = $valA << 3; //Multiplica por 8
echo $valD . " en binario es: " . decbin($valD) . "<br>";
