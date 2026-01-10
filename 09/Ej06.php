<?php
//Operaciones de bit
$valA = 64;
echo $valA . " en binario es: " . decbin($valA) . "<br>";

$valB = $valA >> 1; //Divide entre 2
echo $valB . " en binario es: " . decbin($valB) . "<br>";

$valC = $valA >> 2; //Divide entre 4
echo $valC . " en binario es: " . decbin($valC) . "<br>";

$valD = $valA >> 3; //Divide entre 8
echo $valD . " en binario es: " . decbin($valD) . "<br>";
